<?php 

return array (
    'package' => 'Reddit',
    'tagline' => 'Reddit is a social news aggregation, web content rating, and discussion website.',
    'description' => 'Reddit is a social news aggregation, web content rating, and discussion website.',
    'image' => 'https://logo.clearbit.com/reddit.com?s=128',
    'repo' => 'https://github.com/RapidSoftwareSolutions/Marketplace-Reddit-package',
    'keywords' => array (
        'API', 'social', 'news', 'aggregation', 'Reddit',
    ),
    'accounts' => array (
        'domain' => 'reddit.com',
        'credentials' => array (
            'appClientId', 'appClientSecret',
        ),
    ),
    'blocks' => array (
        array (
            'name' => 'getAccessToken',
            'description' => 'Get access token from code provided in the redirect described.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'appClientSecret',
                    'type' => 'credentials',
                    'info' => 'Secret of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'code',
                    'type' => 'String',
                    'info' => 'A one-time use code that may be exchanged for a bearer token.',
                    'required' => true,
                ),
                array (
                    'name' => 'redirectUri',
                    'type' => 'String',
                    'info' => 'Redirect Uri from your app settings.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'refreshAccessToken',
            'description' => 'Refresh access token.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'appClientSecret',
                    'type' => 'credentials',
                    'info' => 'Secret of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'refreshToken',
                    'type' => 'String',
                    'info' => 'The refresh token retrieved during the initial request for an access token.',
                    'required' => true,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'revokeAccessToken',
            'description' => 'Manually revoking a token.',
            'args' => array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'appClientSecret',
                    'type' => 'credentials',
                    'info' => 'Secret of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'token',
                    'type' => 'String',
                    'info' => 'The access token or refresh token that the client wishes to revoke.',
                    'required' => true,
                ),
                array (
                    'name' => 'tokenTypeHint',
                    'type' => 'String',
                    'info' => 'The type of token being revoked (refresh_token or access_token).',
                    'required' => false,
                ),
            ),
            'callbacks' => array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMe',
            'description' => 'Gets information about the current user\'s account.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyBlockedUsers',
            'description' => 'Gets a list of the current user\'s blocked users.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Limit of duplicate links to retrieve (default: 25, maximum: 100).',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyFriends',
            'description' => 'Gets a list of the current user\'s friends.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Limit of duplicate links to retrieve (default: 25, maximum: 100).',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyKarmaBreakdown',
            'description' => 'Gets karma breakdown of current user.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyPrefs',
            'description' => 'Gets current user\'s site preferences.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getMyTrophies',
            'description' => 'Gets current user\'s trophies.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'clearFlairTemplates',
            'description' => 'Deletes all flair templates of the selected type from the selected subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of flairs to clear.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairType',
                    'type' => 'String',
                    'info' => 'One of (USER_FLAIR, LINK_FLAIR).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteUserFlair',
            'description' => 'Deletes a user\'s flair from the specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to delete user flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username of user whose flair to delete.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteFlairTemplate',
            'description' => 'Deletes the selected flair template from the specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to delete flair template.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairTemplateId',
                    'type' => 'String',
                    'info' => 'ID of template to delete.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'assignUserFlair',
            'description' => 'Assigns the selected user custom flair text and CSS class in the specified subreddit. Mods only.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to assign flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username of user to assign flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Custom flair text (no longer than 64 characters).',
                    'required' => false,
                ),
                array (
                    'name' => 'link',
                    'type' => 'String',
                    'info' => 'A fullname of a link.',
                    'required' => false,
                ),
                array (
                    'name' => 'cssClass',
                    'type' => 'String',
                    'info' => 'A valid subreddit image name.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'configureSubredditFlair',
            'description' => 'Updates all options in a subreddit\'s flair configuration.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to configure flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairEnabled',
                    'type' => 'Boolean',
                    'info' => 'Whether or not user flair is displayed.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairPosition',
                    'type' => 'String',
                    'info' => 'On which side to display user flair. One of \'left\' or \'right\'.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairSelfAssignEnabled',
                    'type' => 'Boolean',
                    'info' => 'Whether or not users can select their own user flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'linkFlairPosition',
                    'type' => 'String',
                    'info' => 'On which side to display links\' flair. One of \'left\', \'right\', or \'none\'.',
                    'required' => true,
                ),
                array (
                    'name' => 'linkFlairSelfAssignEnabled',
                    'type' => 'Boolean',
                    'info' => 'Whether or not users can select their own links\' flair.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserFlairList',
            'description' => 'Retrieves a list of all assigned user flair in the specified subreddit. Must be a mod of that subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Name of subreddit from which to retrieve flair list.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'A user by name.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 1000.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Use \'next\' attribute of previous call to retrieve next page.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Retrieve only flairs that are higher than this user ID on the list.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUserFlairSelector',
            'description' => 'Gets current flair and a list of possible flairs for the specified user in the specified subreddit. Also useful for obtaining flair ID\'s.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to view flair options.',
                    'required' => true,
                ),
                array (
                    'name' => 'link',
                    'type' => 'String',
                    'info' => 'A fullname of a link.',
                    'required' => false,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username for whom to view selection. Defaults to current user.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'addFlairTemplate',
            'description' => 'Adds or modifies a flair template in a subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Name of subreddit to add flair template.',
                    'required' => true,
                ),
                array (
                    'name' => 'apiType',
                    'type' => 'String',
                    'info' => 'Specifies user or link flair template. One of \'link\' or \'user\'.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Flair text (no longer than 64 characters).',
                    'required' => false,
                ),
                array (
                    'name' => 'flairTemplateId',
                    'type' => 'String',
                    'info' => 'The template ID of an existing flair to modify. If null, will add a new one.',
                    'required' => false,
                ),
                array (
                    'name' => 'cssClass',
                    'type' => 'String',
                    'info' => 'Flair CSS class.',
                    'required' => false,
                ),
                array (
                    'name' => 'textEditable',
                    'type' => 'Boolean',
                    'info' => 'Whether or not to allow users to edit the flair\'s text when assigning it.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'selectUserFlair',
            'description' => 'Selects a user flair to use from the flair selection list.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to select flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'Username of user to whom to apply flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairTemplateId',
                    'type' => 'String',
                    'info' => 'Template ID of template to select. Null will remove the user\'s flair.',
                    'required' => false,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Modified flair text, if allowed (no longer than 64 characters).',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'showMyFlair',
            'description' => 'Selects whether or not to show the current user\'s flair in the selected subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to enable or disable flair.',
                    'required' => true,
                ),
                array (
                    'name' => 'flairEnabled',
                    'type' => 'Boolean',
                    'info' => 'True to show flair. False to hide flair.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'gild',
            'description' => 'Gild a link or comment, which gives the author reddit gold. Must have sufficient gold creddits. Reddit\'s documentation is odd, indicating that the thing ID is required both in the URL and the POST parameters.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'fullname',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'giveGold',
            'description' => 'Give the specified user the specified months of reddit gold. Must have sufficient gold creddits. Reddit\'s documentation is odd, indicating that the username is required both in the URL and the POST parameters.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'username',
                    'type' => 'String',
                    'info' => 'Username of user to whom to give gold.',
                    'required' => true,
                ),
                array (
                    'name' => 'months',
                    'type' => 'Number',
                    'info' => 'Number of months to give reddit gold (between 1 and 36).',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createComment',
            'description' => 'Submit a new comment or reply to a message..',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thingId',
                    'type' => 'String',
                    'info' => 'Thing ID of parent object on which to comment. Could be link, text post, or comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Comment, raw markdown text.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'delete',
            'description' => 'Deletes a post or comment.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to delete. Could be link, text post, or comment.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'editText',
            'description' => 'Edits the text of a comment or text post.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thingId',
                    'type' => 'String',
                    'info' => 'Thing ID of text object to edit. Could be text post or comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'New text to replace the old (raw markdown).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'hidePost',
            'description' => 'Hides a post from user\'s listings.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated list of link fullnames.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getInfo',
            'description' => 'Gives a listing of information on objects.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated list of thing.',
                    'required' => true,
                ),
                array (
                    'name' => 'url',
                    'type' => 'String',
                    'info' => 'A valid URL.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'lockThread',
            'description' => 'Lock a post and prevent any new comments by non-moderators.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to lock. Must be a post, not a comment.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'markNSFW',
            'description' => 'Marks a post as NSFW.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to mark as NSFW.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getCommentChildren',
            'description' => 'Get comments in a tree that are hidden by "load more comments". NOTE: Only make one request for this at a time. Higher concurrency will result in an error.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'linkId',
                    'type' => 'String',
                    'info' => 'Fullname (thing ID) of link/post of the comment tree.',
                    'required' => true,
                ),
                array (
                    'name' => 'children',
                    'type' => 'String',
                    'info' => 'A comma-delimited list of comment ID36s for which to retrieve children.',
                    'required' => true,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'One of (confidence, top, new, controversial, old, random, qa, live).',
                    'required' => false,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Id of the associated MoreChildren object.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'report',
            'description' => 'Report a link, comment or message.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thingId',
                    'type' => 'String',
                    'info' => 'Thing ID of object to report.',
                    'required' => true,
                ),
                array (
                    'name' => 'reason',
                    'type' => 'String',
                    'info' => 'The reason for the report. Must be <100 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'otherReason',
                    'type' => 'String',
                    'info' => 'The other reason for the report. Must be <100 characters.',
                    'required' => false,
                ),
                array (
                    'name' => 'siteReason',
                    'type' => 'String',
                    'info' => 'The site reason for the report. Must be <100 characters.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'save',
            'description' => 'Save a link or comment. Saved things are kept in the user\'s saved listing for later perusal.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to save. Can be post or comment.',
                    'required' => true,
                ),
                array (
                    'name' => 'category',
                    'type' => 'String',
                    'info' => 'Category in which to save object. Defaults to none.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSavedCategories',
            'description' => 'Get a list of categories in which things are currently saved.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'sendInboxReplies',
            'description' => 'Toggles whether or not the current user should receive replies to a specific post or comment to their inbox.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to toggle.',
                    'required' => true,
                ),
                array (
                    'name' => 'state',
                    'type' => 'Boolean',
                    'info' => 'State of inbox replies. True to receive, false for not.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'setContestMode',
            'description' => 'Toggles contest mode on a post.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to toggle contest mode.',
                    'required' => true,
                ),
                array (
                    'name' => 'state',
                    'type' => 'Boolean',
                    'info' => 'True to enable contest mode, false to disable.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'stickyPost',
            'description' => 'Stickies a post at the top of the subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to sticky.',
                    'required' => true,
                ),
                array (
                    'name' => 'num',
                    'type' => 'Number',
                    'info' => 'Position of new sticky. 1 for top, 2 for bottom. Defaults to 2.',
                    'required' => false,
                ),
                array (
                    'name' => 'state',
                    'type' => 'Boolean',
                    'info' => 'State boolean value.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'setSuggestedSort',
            'description' => 'Sets the default sort of a link\'s comments.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thing',
                    'type' => 'String',
                    'info' => 'Thing ID of link to set suggested sort.',
                    'required' => true,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'Sort method. One of: \'confidence\', \'top\', \'new\', \'hot\', \'controversial\', \'old\', \'random\', \'qa\'',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'submitLinkPost',
            'description' => 'Submits a new link post.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'sr',
                    'type' => 'String',
                    'info' => 'Subreddit in which to post link.',
                    'required' => true,
                ),
                array (
                    'name' => 'title',
                    'type' => 'String',
                    'info' => 'Title of the submission. up to 300 characters long.',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Raw markdown text of the submission.',
                    'required' => true,
                ),
                array (
                    'name' => 'url',
                    'type' => 'String',
                    'info' => 'Link to post.',
                    'required' => true,
                ),
                array (
                    'name' => 'sendreplies',
                    'type' => 'Boolean',
                    'info' => 'Send comment replies to the current user\'s inbox. True to enable, false to disable.',
                    'required' => false,
                ),
                array (
                    'name' => 'kind',
                    'type' => 'String',
                    'info' => 'One of (link, self, image).',
                    'required' => false,
                ),
                array (
                    'name' => 'resubmit',
                    'type' => 'Boolean',
                    'info' => 'Boolean value.',
                    'required' => false,
                ),
                array (
                    'name' => 'extension',
                    'type' => 'String',
                    'info' => 'Extension used for redirects.',
                    'required' => false,
                ),
                array (
                    'name' => 'g-recaptcha-response',
                    'type' => 'String',
                    'info' => 'Recaptcha response.',
                    'required' => false,
                ),
                array (
                    'name' => 'app',
                    'type' => 'String',
                    'info' => 'App.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unhidePost',
            'description' => 'Unhides a post from user\'s hidden posts.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated list of link fullnames to unhide.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unlockThread',
            'description' => 'Unlock a post and allow any new comments.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to unlock.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unmarkNSFW',
            'description' => 'Unmarks a post as NSFW.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of post to unmark as NSFW.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unsave',
            'description' => 'Unsaves a post or comment from the current user\'s saved posts.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to unsave. Can be post or comment.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'upVote',
            'description' => 'Cast a vote on a thing.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to upvote.',
                    'required' => true,
                ),
                array (
                    'name' => 'rank',
                    'type' => 'Number',
                    'info' => 'Upvote rank, an integer greater than 1.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'downVote',
            'description' => 'Downvotes a post or comment.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to downvote.',
                    'required' => true,
                ),
                array (
                    'name' => 'rank',
                    'type' => 'Number',
                    'info' => 'Downvote rank, an integer greater than 1.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unVote',
            'description' => 'Resets the current user\'s vote on a post or comment.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of object to unvote.',
                    'required' => true,
                ),
                array (
                    'name' => 'rank',
                    'type' => 'Number',
                    'info' => 'Unvote rank, an integer greater than 1.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getLinksById',
            'description' => 'Retrieves a listing of links by their specified thing ID.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'names',
                    'type' => 'String',
                    'info' => 'A comma-separated list thing ID\'s of links to retrieve.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getComments',
            'description' => 'Retrieves a listing of comments and children for a link and optionally a specific comment',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit in which to assign comments.',
                    'required' => false,
                ),
                array (
                    'name' => 'article',
                    'type' => 'String',
                    'info' => 'ID36 or fullname of link for comments to fetch.',
                    'required' => true,
                ),
                array (
                    'name' => 'comment',
                    'type' => 'String',
                    'info' => 'Optional, ID36 or fullname of a single comment to fetch with children, much like permalink.',
                    'required' => false,
                ),
                array (
                    'name' => 'context',
                    'type' => 'Number',
                    'info' => 'Number of levels up of parent comments to retrieve. Only applicable to child comments (between 0 and 8).',
                    'required' => false,
                ),
                array (
                    'name' => 'depth',
                    'type' => 'Number',
                    'info' => 'Depth of child comments to retrieve.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Limit of comments to retrieve.',
                    'required' => false,
                ),
                array (
                    'name' => 'sort',
                    'type' => 'String',
                    'info' => 'How to sort the comments, one of \'confidence\', \'top\', \'new\', \'hot\', \'controversial\', \'old\', \'random\', \'qa\'',
                    'required' => false,
                ),
                array (
                    'name' => 'showedits',
                    'type' => 'Boolean',
                    'info' => 'Show edited comments, perhaps? Not well documented by reddit.',
                    'required' => false,
                ),
                array (
                    'name' => 'showmore',
                    'type' => 'Boolean',
                    'info' => 'Include links to show more comments, maybe? Not well documented by reddit.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getDuplicateLinks',
            'description' => 'Retrieves the specified link and a listing of other links that are to duplicate destinations.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'article',
                    'type' => 'String',
                    'info' => 'ID36 or fullname of link to check for duplicates.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Limit of duplicate links to retrieve (default: 25, maximum: 100).',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getHot',
            'description' => 'Retrieves the hot listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getControversial',
            'description' => 'Retrieves the controversial listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'Time constraint for age of items on list. One of hour, day, week, month, year, all.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
                array (
                    'name' => 'show',
                    'type' => 'String',
                    'info' => '(optional) the string all.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getNew',
            'description' => 'Retrieves the new listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRandom',
            'description' => 'Retrieves a random link from the optionally specified subreddit. If none, choose from any subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit from which to retrieve a random link.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getTop',
            'description' => 'Retrieves the top listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => false,
                ),
                array (
                    'name' => 't',
                    'type' => 'String',
                    'info' => 'Time constraint for age of items on list. One of \'hour\', \'day\', \'week\', \'month\', \'year\', \'all\'.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getRising',
            'description' => 'Retrieves the rising listing for the optionally specified subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'subreddit',
                    'type' => 'String',
                    'info' => 'Subreddit of listing to retrieve. If none, defaults to front page.',
                    'required' => false,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of number of items to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'checkNeedsCaptcha',
            'description' => 'Check whether ReCAPTCHAs are needed for API methods.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getLiveThread',
            'description' => 'Get a listing of live events by id.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'names',
                    'type' => 'String',
                    'info' => 'A comma-separated list of ids.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'createLiveThread',
            'description' => 'Creates a new live thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'title',
                    'type' => 'String',
                    'info' => 'The thread\'s title (no longer than 120 characters).',
                    'required' => true,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'The thread\'s description (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'resources',
                    'type' => 'String',
                    'info' => 'The thread\'s resources section in the sidebar (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'nsfw',
                    'type' => 'Boolean',
                    'info' => 'Whether or not the thread is NSFW. Prompts guests to continue when visiting.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getCurrentlyFeaturedLiveThread',
            'description' => 'Get some basic information about the currently featured live thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'acceptInvitationToThread',
            'description' => 'Accept a pending invitation to contribute to the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'closeThread',
            'description' => 'Permanently close the thread, disallowing future updates.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteUpdateFromThread',
            'description' => 'Delete an update from the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'the ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'editThread',
            'description' => 'Configure the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'title',
                    'type' => 'String',
                    'info' => 'The thread\'s title (no longer than 120 characters).',
                    'required' => false,
                ),
                array (
                    'name' => 'description',
                    'type' => 'String',
                    'info' => 'The thread\'s description (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'resources',
                    'type' => 'String',
                    'info' => 'The thread\'s resources section in the sidebar (raw markdown text).',
                    'required' => false,
                ),
                array (
                    'name' => 'nsfw',
                    'type' => 'Boolean',
                    'info' => 'Whether or not the thread is NSFW. Prompts guests to continue when visiting.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'inviteContributerToThread',
            'description' => 'Invite another user to contribute to the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The the name of an existing user.',
                    'required' => true,
                ),
                array (
                    'name' => 'permissions',
                    'type' => 'String',
                    'info' => 'Permission description e.g. +update,+edit,-manage.',
                    'required' => true,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'One of (liveupdate_contributor_invite, liveupdate_contributor).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'leaveContributerFromThread',
            'description' => 'Abdicate contributorship of the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'reportThread',
            'description' => 'Report the thread for violating the rules of reddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'One of (spam, vote-manipulation, personal-information, sexualizing-minors, site-breaking).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'revokeUserContributorship',
            'description' => 'Revoke another user\'s contributorship.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Fullname of a account.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'revokeContributorInvite',
            'description' => 'Revoke an outstanding contributor invite.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Fullname of a account.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'changeContributorPermissions',
            'description' => 'Change a contributor or contributor invite\'s permissions.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'name',
                    'type' => 'String',
                    'info' => 'The the name of an existing user.',
                    'required' => true,
                ),
                array (
                    'name' => 'permissions',
                    'type' => 'String',
                    'info' => 'Permission description e.g. +update,+edit,-manage.',
                    'required' => true,
                ),
                array (
                    'name' => 'type',
                    'type' => 'String',
                    'info' => 'One of (liveupdate_contributor_invite, liveupdate_contributor).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'postUpdateToThread',
            'description' => 'Post an update to the thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'body',
                    'type' => 'String',
                    'info' => 'Raw markdown text.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getThreadUpdates',
            'description' => 'Get a list of updates posted in this thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'The ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'The ID of a single update. e.g. LiveUpdate_ff87068e-a126-11e3-9f93-12313b0b3603.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The maximum number of items desired (default: 25, maximum: 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'stylesr',
                    'type' => 'String',
                    'info' => 'Subreddit name.',
                    'required' => false,
                ),
                array (
                    'name' => 'isEmbed',
                    'type' => 'Boolean',
                    'info' => 'Is embed, internal use only.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getThreadContributers',
            'description' => 'Get a list of users that contribute to this thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getThreadSubmissions',
            'description' => 'Get a list of reddit submissions linking to this thread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'thread',
                    'type' => 'String',
                    'info' => 'The thread\'s name.',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Fullname of a thing.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'The maximum number of items desired (default: 25, maximum: 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'collapseMessage',
            'description' => 'Collapse one or more messages in modmail.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Comma-separated thing ID\'s of messages to collapse.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'composeMessage',
            'description' => 'Sends a message to a user or subreddit.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'to',
                    'type' => 'String',
                    'info' => 'Username or subreddit to send to.',
                    'required' => true,
                ),
                array (
                    'name' => 'subject',
                    'type' => 'String',
                    'info' => 'Subject of message (no longer than 100 characters).',
                    'required' => true,
                ),
                array (
                    'name' => 'text',
                    'type' => 'String',
                    'info' => 'Body of message (raw markdown text).',
                    'required' => true,
                ),
                array (
                    'name' => 'fromSr',
                    'type' => 'String',
                    'info' => 'Optionally the name of the subreddit from which to send the message.',
                    'required' => false,
                ),
                array (
                    'name' => 'g-recaptcha-response',
                    'type' => 'String',
                    'info' => 'Recaptcha response.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'deleteMessage',
            'description' => 'Deletes a message from the recipient\'s inbox. Be aware that messages sent both from and to yourself cannot be deleted.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'String Thing ID of message to delete.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'markAllMessagesAsRead',
            'description' => 'Queues a job for all of your messages to be marked as read.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'markMessageRead',
            'description' => 'Marks one or more messages as read.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated string of one or more message thing ID\'s (t4_).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'unblockSubredditByMessage',
            'description' => 'Unblock a subreddit using a message they sent you.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Thing ID of a message sent by the subreddit to unblock.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'uncollapseMessage',
            'description' => 'Uncollapse one or more messages in modmail.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'Comma-separated thing ID\'s of messages to uncollapse.',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'markMessageUnread',
            'description' => 'Marks one or more messages as unread.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'id',
                    'type' => 'String',
                    'info' => 'A comma-separated string of one or more message thing ID\'s (t4_).',
                    'required' => true,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getInbox',
            'description' => 'Retrieves the current user\'s personal message inbox.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'mark',
                    'type' => 'Boolean',
                    'info' => 'One of (true, false).',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of the number of links to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getUnread',
            'description' => 'Retrieves the current user\'s unread personal messages.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'mark',
                    'type' => 'Boolean',
                    'info' => 'One of (true, false).',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of the number of links to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
        array (
            'name' => 'getSent',
            'description' => 'Retrieves the current user\'s sent personal messages.',
            'args'=> array (
                array (
                    'name' => 'appClientId',
                    'type' => 'credentials',
                    'info' => 'Id of your app.',
                    'required' => true,
                ),
                array (
                    'name' => 'accessToken',
                    'type' => 'String',
                    'info' => 'Access token.',
                    'required' => true,
                ),
                array (
                    'name' => 'mark',
                    'type' => 'Boolean',
                    'info' => 'One of (true, false).',
                    'required' => true,
                ),
                array (
                    'name' => 'after',
                    'type' => 'String',
                    'info' => 'Get items lower on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'before',
                    'type' => 'String',
                    'info' => 'Get items higher on list than this entry. Does not mean chronologically.',
                    'required' => false,
                ),
                array (
                    'name' => 'count',
                    'type' => 'Number',
                    'info' => 'A positive integer (default: 0).',
                    'required' => false,
                ),
                array (
                    'name' => 'limit',
                    'type' => 'Number',
                    'info' => 'Upper limit of the number of links to retrieve. Maximum is 100.',
                    'required' => false,
                ),
                array (
                    'name' => 'srDetail',
                    'type' => 'String',
                    'info' => 'Expand subreddits.',
                    'required' => false,
                ),
            ),
            'callbacks'=> array (
                array (
                    'name' => 'error',
                    'info' => 'Error',
                ),
                array (
                    'name' => 'success',
                    'info' => 'Success',
                ),
            ),
        ),
    ),
    'custom' => array (
        'getAccessToken'=> array (
            'dictionary'=> array (
                'appClientId' => 'appClientId',
                'appClientSecret' => 'appClientSecret',
                'code' => 'code',
                'redirectUri' => 'redirect_uri'
            ),
            'vendorUrl' => 'https://www.reddit.com/api/v1/access_token',
            'method' => 'POST-Access',
            'showApiType' => false,
            'custom' => true,
        ),
        'refreshAccessToken'=> array (
            'dictionary'=> array (
                'appClientId' => 'appClientId',
                'appClientSecret' => 'appClientSecret',
                'refreshToken' => 'refresh_token',
            ),
            'vendorUrl' => 'https://www.reddit.com/api/v1/access_token',
            'method' => 'POST-Access',
            'showApiType' => false,
            'custom' => true,
        ),
        'revokeAccessToken'=> array (
            'dictionary'=> array (
                'appClientId' => 'appClientId',
                'appClientSecret' => 'appClientSecret',
                'token' => 'token',
                'tokenTypeHint' => 'token_type_hint'
            ),
            'vendorUrl' => 'https://www.reddit.com/api/v1/revoke_token',
            'method' => 'POST-Access',
            'showApiType' => false,
            'custom' => true,
        ),

        'getMe'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyBlockedUsers'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'limit' => 'limit',
                'count' => 'count',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/prefs/blocked',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyFriends'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'after' => 'after',
                'before' => 'before',
                'limit' => 'limit',
                'count' => 'count',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/friends',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyKarmaBreakdown'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/karma',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyPrefs'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/prefs',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getMyTrophies'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/me/trophies',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'clearFlairTemplates'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'flairType' => 'flair_type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/clearflairtemplates',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteUserFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'name' => 'name',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/deleteflair',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteFlairTemplate'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'flairTemplateId' => 'flair_template_id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/deleteflairtemplate',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'assignUserFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'name' => 'name',
                'text' => 'text',
                'link' => 'link',
                'cssClass' => 'css_class',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flair',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'configureSubredditFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'flairEnabled' => 'flair_enabled',
                'flairPosition' => 'flair_position',
                'flairSelfAssignEnabled' => 'flair_self_assign_enabled',
                'linkFlairPosition' => 'link_flair_position',
                'linkFlairSelfAssignEnabled' => 'link_flair_self_assign_enabled',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flairconfig',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getUserFlairList'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'name' => 'name',
                'limit' => 'limit',
                'after' => 'after',
                'before' => 'before',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flairlist',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUserFlairSelector'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'link' => 'link',
                'name' => 'name',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flairselector',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'addFlairTemplate'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'apiType' => 'api_type',
                'text' => 'text',
                'flairTemplateId' => 'flair_template_id',
                'cssClass' => 'css_class',
                'textEditable' => 'text_editable',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/flairtemplate',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'selectUserFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'name' => 'name',
                'flairTemplateId' => 'flair_template_id',
                'text' => 'text',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/selectflair',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'showMyFlair'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'flairEnabled' => 'flair_enabled',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/api/setflairenabled',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'gild'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'fullname' => 'fullname',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/gold/gild/{{fullname}}',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'giveGold'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'username' => 'username',
                'months' => 'months',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/v1/gold/give/{{username}}',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'createComment'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thingId' => 'thing_id',
                'text' => 'text',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/comment',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'delete'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/del',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'editText'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thingId' => 'thing_id',
                'text' => 'text',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/editusertext',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'hidePost'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/hide',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getInfo'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'url' => 'url',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/info',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'lockThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/lock',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'markNSFW'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/marknsfw',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getCommentChildren'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'linkId' => 'link_id',
                'children' => 'children',
                'sort' => 'sort',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/morechildren',
            'method' => 'GET',
            'showApiType' => true,
        ),
        'report'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thingId' => 'thing_id',
                'reason' => 'reason',
                'otherReason' => 'other_reason',
                'siteReason' => 'site_reason',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/report',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'save'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'category' => 'category',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/save',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getSavedCategories'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/saved_categories',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'sendInboxReplies'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'state' => 'state',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/sendreplies',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'setContestMode'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'state' => 'state',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/set_contest_mode',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'stickyPost'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'num' => 'num',
                'state' => 'state',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/set_subreddit_sticky',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'setSuggestedSort'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thing' => 'thing',
                'sort' => 'sort',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/set_suggested_sort',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'submitLinkPost'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'sr' => 'sr',
                'title' => 'title',
                'text' => 'text',
                'url' => 'url',
                'sendreplies' => 'sendreplies',
                'kind' => 'kind',
                'resubmit' => 'resubmit',
                'extension' => 'extension',
                'g-recaptcha-response' => 'g-recaptcha-response',
                'app' => 'app',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/submit',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'unhidePost'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unhide',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'unlockThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unlock',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'unmarkNSFW'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unmarknsfw',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'unsave'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unsave',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'upVote'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'rank' => 'rank',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/vote',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'downVote'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'rank' => 'rank',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/vote',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'unVote'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
                'rank' => 'rank',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/vote',
            'method' => 'POST',
            'showApiType' => false,
            'custom' => true,
        ),
        'getLinksById'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'names' => 'names',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/by_id/{{names}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getComments'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'article' => 'article',
                'comment' => 'comment',
                'context' => 'context',
                'depth' => 'depth',
                'limit' => 'limit',
                'sort' => 'sort',
                'showedits' => 'showedits',
                'showmore' => 'showmore',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/comments/{{article}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getDuplicateLinks'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'article' => 'article',
                'after' => 'after',
                'before' => 'before',
                'limit' => 'limit',
                'count' => 'count',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/duplicates/{{article}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getHot'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'after' => 'after',
                'before' => 'before',
                'limit' => 'limit',
                'count' => 'count',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/hot.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getControversial'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
                'show' => 'show',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/controversial.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getNew'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/new.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getRandom'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/random.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getTop'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                't' => 't',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/top.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getRising'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'subreddit' => 'subreddit',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com[[/r/{{subreddit}}]]/rising.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'checkNeedsCaptcha'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/needs_captcha',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getLiveThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'names' => 'names',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/by_id/{{names}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'createLiveThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'title' => 'title',
                'description' => 'description',
                'resources' => 'resources',
                'nsfw' => 'nsfw',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/create',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getCurrentlyFeaturedLiveThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/happening_now',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'acceptInvitationToThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/accept_contributor_invite',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'closeThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/close_thread',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteUpdateFromThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/delete_update',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'editThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'title' => 'title',
                'description' => 'description',
                'resources' => 'resources',
                'nsfw' => 'nsfw',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/edit',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'inviteContributerToThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'name' => 'name',
                'permissions' => 'permissions',
                'type' => 'type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/invite_contributor',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'leaveContributerFromThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/leave_contributor',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'reportThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'type' => 'type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/report',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'revokeUserContributorship'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/rm_contributor',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'revokeContributorInvite'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/rm_contributor_invite',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'changeContributorPermissions'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'name' => 'name',
                'permissions' => 'permissions',
                'type' => 'type',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/set_contributor_permissions',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'postUpdateToThread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'body' => 'body',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/live/{{thread}}/update',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'getThreadUpdates'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'stylesr' => 'stylesr',
                'isEmbed' => 'is_embed',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/live/{{thread}}',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getThreadContributers'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/live/{{thread}}/contributors',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getThreadSubmissions'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'thread' => 'thread',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/live/{{thread}}/discussions',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'collapseMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/collapse_message',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'composeMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'to' => 'to',
                'subject' => 'subject',
                'text' => 'text',
                'fromSr' => 'from_sr',
                'g-recaptcha-response' => 'g-recaptcha-response',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/compose',
            'method' => 'POST',
            'showApiType' => true,
        ),
        'deleteMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/del_msg',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'markAllMessagesAsRead'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/read_all_messages',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'markMessageRead'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/read_message',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'unblockSubredditByMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unblock_subreddit',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'uncollapseMessage'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/uncollapse_message',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'markMessageUnread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'id' => 'id',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/api/unread_message',
            'method' => 'POST',
            'showApiType' => false,
        ),
        'getInbox'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'mark' => 'mark',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/message/inbox.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getUnread'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'mark' => 'mark',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/message/unread.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
        'getSent'=> array (
            'dictionary'=> array (
                'accessToken' => 'accessToken',
                'appClientId' => 'appClientId',
                'mark' => 'mark',
                'after' => 'after',
                'before' => 'before',
                'count' => 'count',
                'limit' => 'limit',
                'srDetail' => 'sr_detail',
            ),
            'vendorUrl' => 'https://oauth.reddit.com/message/sent.json',
            'method' => 'GET',
            'showApiType' => false,
        ),
    ),
);