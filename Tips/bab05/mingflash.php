<?php
/* mingflash.php */

// Mengaktifkan MX actionscript
ming_UseSwfVersion(6);

// Membuat objek swfshape
$s = new SWFShape();
$fp = fopen('./php.gif', 'r');
$jpg = new SWFBitmap($fp);
$w = $jpg->getWidth();
$h = $jpg->getHeight();

$f = $s->addFill($jpg);
$f->moveTo(-$w/2, -$h/2);
$s->setRightFill($f);
$s->movePento(-$w/2, -$h/2);
$s->drawLine($w, 0);
$s->drawLine(0, $h);
$s->drawLine(-$w, 0);
$s->drawLine(0, -$h);

// Membuat clip movie
$p = new SWFSprite();
$i = $p->add($s);

for ($step=0; $step<360; $step+=2) {
   $p->nextFrame();
   $i->rotate(-2);
}

// Membuat objek movie baru
$m = new SWFMovie();
$i = $m->add($p);
$i->setName('php');
$i->moveTo(100, 50);
$m->setRate(100);
$m->setDimension($w, $h);

// Membuat Action untuk men-drag objek
$m->add(new SWFAction("
php.onPress=function() {
   this.startDrag('');
};
php.onRelease=php.onReleaseOutside=function() {
   stopDrag();
};
"));

header('Content-type: application/x-shockwave-flash');
$m->output(1);

?>