<?php
/**
 * This script should be used only to test the reddit.php API/SDK functions.
 *
 * You need to setup a config, in .config. (git should ignore this, so you need
 * to set it up like so:
 *
 * // For some functions, pre-oath, at least until they are migrated, you need a
 * username/password:
 * $username = 'username';
 * $password = 'password';
 *
 * // For the login/Oauth API, you need to set your site keys:
 * $test_reddit = new stdClass();
 * $test_reddit->client_id = 'client_id';
 * $test_reddit->client_secret = 'secret';
 * $test_reddit->redirect_url = 'http://my_site/url';
 * $test_reddit->subreddit = 'something'; // the bit after http://reddit.com/r/
 */

require_once ('.config');

if(! $test_reddit instanceof stdClass){
  throw new ErrorException("Please read the documentation before running Tests.");
}