<?php 

/**
 
 * This will be used for which Controllers will 
 * be used for all routes of this Package.  
  
 */ 

$namespace = 'Survey\Http\Controllers';


Route::group([
    'namespace' => $namespace,
    'prefix'    => 'survey',
    'middleware'=> 'web'

], function() {
    
        Route::resource('/audit', 'SurveyController');

});
