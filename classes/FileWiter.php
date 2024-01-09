<?php
class FileWiter{
    public $fileName,$fileStream;
     function __construct(string $fileName ) {
        $this->fileName = $fileName;
        $this->fileStream=fopen($this->fileName,"w");
    }
    public function writing(string $textData){
        fwrite($this->fileStream,$textData);
    }
    function __destruct()
    {
        fclose($this->fileStream);
    }
}