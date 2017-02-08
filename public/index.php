<?php
require dirname(__DIR__) . '/vendor/autoload.php';

use Core\Router;

//header('Content-type: application/json');
http_response_code (200);
define('RAPID_IN', TRUE);

$inPath = trim(str_replace('index.php', '', trim($_SERVER['SCRIPT_NAME'], '\/\\' )), '\/\\');
if( strlen(trim($inPath)) > 0){
    define('INDEX_PATH', '/' . $inPath . '/');
}else{
    define('INDEX_PATH', '/');
}
define('APP_PATH', __DIR__);
define('HTTP_HOST', $_SERVER['HTTP_HOST']);
$allType = [];
$blocks = include dirname(APP_PATH) . '/src/metadata/confFromPhapper.php';
$newBlocks = [];
$customBlocks = [];

foreach($blocks as $bName => $block){

    $newBlock['name'] = $bName;
    $newBlock['description'] = $block['description'];

    $customBlocks[$bName]['dictionary'] = [];
    $customBlocks[$bName]['vendorUrl'] = 'https://oauth.reddit.com' . $block['vendor']['url'];
    $customBlocks[$bName]['method'] = $block['vendor']['method'];
    $customBlocks[$bName]['showApiType'] = $block['vendor']['showApiType'];
    if(isset($block['custom'])&&$block['custom'] == true){
        $customBlocks[$bName]['custom'] = true;
    }

    $newArgs = [];
    foreach($block['args'] as $arg) {
        if($arg['type'] == 'string'){
            $argType = 'String';
        }else if($arg['type'] == 'int'){
            $argType = 'Number';
        }else if($arg['type'] == 'bool'){
            $argType = 'Boolean';
        }

        $optionName = $arg['name'];
        $oldDictionary = trim($optionName);
        if(strpos($optionName, '_')){
            $optionName = preg_replace_callback('|_[a-z]|', function ($matches) {
                return strtoupper(trim($matches[0], '_'));
            }, $optionName);
        }
        $customBlocks[$bName]['dictionary'][$optionName] = $oldDictionary;

        $newArgs[] = [
            'name' => $optionName,
            'type' => $argType,
            'info' => $arg['info'],
            'required' => $arg['required'],
        ];
    }

    $newBlock['args'] = $newArgs;
    $newBlock['callbacks'] =[['name' => 'error','info' => 'Error'],['name' => 'success','info' => 'Success']];

    $newBlocks[] = $newBlock;
}
echo '<hr><pre>';
//echo var_export($newBlocks, true);
echo preg_replace('/=>\s*\n\s+array \(/', '=> array (', preg_replace('/\n\s*[0-9]+\s=>.*\n/', "\n", var_export($newBlocks, true)));
echo '<hr>';
echo preg_replace('/=>\s*\n\s+array \(/', '=> array (', preg_replace('/\n\s*[0-9]+\s=>.*\n/', "\n", var_export($customBlocks, true)));
echo '<hr></pre>';

exit();
// Include metadata array
$settings = include dirname(APP_PATH) . '/src/metadata/metadata.php';

if(
    !isset($settings['package']) ||
    !isset($settings['blocks']) ||
    !is_array($settings['blocks']) ||
    !isset($settings['custom'])
){
    throw new Exception('Wrong metadata.php format \'package\', \'blocks\' or \'customBlocksHandlers\' in root is miss');
}
$router = new Router($settings['package'], $settings['blocks'], $settings['custom']);
$router->setup();
$router->run();
http_response_code(200);
exit(200);
