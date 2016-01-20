<?php

trait FacebookPost {
    abstract public function mensagem();
}

class ImagemPost {
    use FacebookPost;
}