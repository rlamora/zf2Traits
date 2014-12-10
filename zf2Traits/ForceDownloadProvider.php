<?php
 
trait ForceDownloadProvider
{
    public function forceDownload($filename,$content_type) 
    {
        $response = new \Zend\Http\Response\Stream();
        $response->setStream(fopen($filename, 'r'));
        $response->setStatusCode(200);

        $headers = new \Zend\Http\Headers();
        $headers->addHeaderLine('Content-Type', $content_type)
                ->addHeaderLine('Content-Disposition', 'attachment; filename="' . $filename . '"')
                ->addHeaderLine('Content-Length', filesize($filename));

        $response->setHeaders($headers);
        return $response;
    }
}


  

