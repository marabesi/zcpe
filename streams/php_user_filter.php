<?php

class marabesi extends php_user_filter
{

  private $handler;

  public function filter($in, $out, &$consumed, $closing)
  {
    $data = '';
    $consumed = 0;

    while ($bucket = stream_bucket_make_writeable($in))
    {
      $data .= $bucket->data;
      $consumed += $bucket->datalen;
    }

    $bucket = stream_bucket_new($this->handler, '');
    
    if(false === $bucket)
    {
      return PSFS_ERR_FATAL;
    }

    $bucket->data = $data;

    stream_bucket_append($out, $bucket);

    return PSFS_PASS_ON;
  }

  public function onClose()
  {
    fclose($this->handler);
  }

  public function onCreate()
  {
    $this->handler = fopen('php://temp', 'w+');

    if (false !== $this->handler)
    {
      return true;
    }

    return false;
  }

}

stream_filter_register('string.marabesi', 'marabesi');

print file_get_contents('php://filter/read=string.marabesi/resource=file.txt');
