<?php

use Illuminate\Support\Facades\File;

if (!function_exists('get_file_upload_path')) {
  /**
   * Returns the target path to upload each document.
   *
   * @param string $type
   * @param int $id
   * @param boolean $rootDir
   * @return string
   */
  function get_file_upload_path($type, $id, $rootDir = false, $basePath = null)
  {
    $ds = DIRECTORY_SEPARATOR;
    $types = [
      "invoice-detail-files" => "storage" . $ds . "invoice-detail" . $ds . "files" . $ds,
      "image-partners" => "assets" . $ds . "images" . $ds . "partners" . $ds,
      "image-service-samples" => "assets" . $ds . "images" . $ds . "service-samples" . $ds,
    ];

    $path = "";
    if ($basePath != null) {
      $path = $basePath . $ds;
    }
    $path .= $types[$type] . sprintf('%05s', floor($id / 1000)) . $ds;

    if ($rootDir) {
      $path = $types[$type];
    }

    // create directory if not exist

    try {
      if (!is_dir($path)) {
        mkdir($path, 0777, true); //TODO: check permission 0777 (for php only)
        File::put($path . 'index.php', '');
      }
    } catch (\Exception $e) {
    }
    return $path;
  }
}
