<?php
/*
class A
{
    function fire()
    {

    }
}

class B extends A
{
    function fire()
    {
        parent::fire(); // TODO: Change the autogenerated stub
    }
}

function doSomething(A $a)  # A can be substituted by B
{

    ### DO SOMETHING

}
*/  #EXAMPLE A & B

/*
class VideoPlayer
{

    function play($file)
    {
        //PLAY THE VIDEO
    }

}

class AviVideoPlayer extends VideoPlayer
{
    function play($file)
    {
        if (pathinfo($file, PATHINFO_EXTENSION) !== 'avi') {
            throw new Exception(' '); # VIOLATES the LSP!
        }
    }
}*/  # EXAMPLE VIDEO PLAYER

