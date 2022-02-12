<?php
// 应用公共文件

/**
 * Unified Api Data Format Output
 * @param $status
 * @param string $message
 * @param array $data
 * @param $httpStatus
 * @return \think\response\Json
 */
function show($status, $message = "error", $data = [] ,$httpStatus): \think\response\Json
{
    $result = [
        "status" => $status,
        "message" => $message,
        "result" => $data
    ];
    return json($result);
}