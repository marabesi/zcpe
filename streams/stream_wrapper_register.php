<?php

class Marabesi {

    private $file;

    /**
     * @param type $path The path to the file eg. /foo/bar/test.txt
     * @param type $mode
     * @param type $oprions
     * @param type $opened_path
     */
    public function stream_open($path, $mode, $options, &$opened_path)
    {
        $this->file = fopen($path, $mode);

        if (!$this->file) {
            throw new \InvalidArgumentException('Unable to open the file ' . $path);
        }

        return true;
    }

    public function stream_read($count)
    {
        return strtoupper(fread($this->file, $count));
    }

    public function stream_eof()
    {
        return feof($this->file);
    }

    public function stream_close()
    {
        return fclose($this->file);
    }
}

stream_wrapper_register('marabesi', 'Marabesi');

print file_get_contents('marabesi://arquivo.txt');