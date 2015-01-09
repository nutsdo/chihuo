<?php
    //permission class
class PermissionComposer {

    public function compose($view){
    
        if (Sentry::check()) {
            $user = Sentry::getUser();
            if (!$user->isSuperUser()) {
                $id = $user->id;
                // Find the user using the user id
                $user = Sentry::getUserProvider()->findById($id);
                // Get the user permissions
                $has_permissions = $user->getMergedPermissions();
                $permissions = Config::get('permission');
                $view->with('permissions', $permissions)->with('has_permissions',$has_permissions);
            }else {
                $permissions = Config::get('permission');
                $view->with('permissions', $permissions);
            }	
        }
        
    }

}