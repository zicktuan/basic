<?php

class BaseController {

    /**
     * Description:
     * $path : folderName.fileName
     * + get after folder views
     */
    protected function view( $viewPath, array $data = [] ) {

        foreach ( $data as $key => $value ) {
            $$key = $value;
        }

        require VIEW_FOLDER_NAME . '/' . str_replace( '.', '/', $viewPath) . '.php';
    }

    protected function loadModel( $modelPath ) {
        require MODEl_FOLDER_NAME . '/' . $modelPath . '.php'; 
    }

}