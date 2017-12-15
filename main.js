01
// inner variables
02
var song;
03
var tracker = $('.tracker');
04
var volume = $('.volume');
05
// initialization - first element in playlist
06
initAudio($('.playlist li:first-child'));
07
// set volume
08
song.volume = 0.8;
09
// initialize the volume slider
10
volume.slider({
11
range: 'min',
12
min: 1,
13
max: 100,
14
value: 80,
15
start: function(event,ui) {},
16
slide: function(event, ui) {
17
song.volume = ui.value / 100;
18
},
19
stop: function(event,ui) {},
20
});
21
// empty tracker slider
22
tracker.slider({
23
range: 'min',
24
min: 0, max: 10,
25
start: function(event,ui) {},
26
slide: function(event, ui) {
27
song.currentTime = ui.value;
28
},
29
stop: function(event,ui) {}
30
});
01
function initAudio(elem) {
02
var url = elem.attr('audiourl');
03
var title = elem.text();
04
var cover = elem.attr('cover');
05
var artist = elem.attr('artist');
06
$('.player .title').text(title);
07
$('.player .artist').text(artist);
08
$('.player .cover').css('background-image','url(data/' + cover+')');;
09
song = new Audio('data/' + url);
10
// timeupdate event listener
11
song.addEventListener('timeupdate',function (){
12
var curtime = parseInt(song.currentTime, 10);
13
tracker.slider('value', curtime);
14
});
15
$('.playlist li').removeClass('active');
16
elem.addClass('active');
17
}
18
function playAudio() {
19
song.play();
20
tracker.slider("option", "max", song.duration);
21
$('.play').addClass('hidden');
22
$('.pause').addClass('visible');
23
}
24
function stopAudio() {
25
song.pause();
26
$('.play').removeClass('hidden');
27
$('.pause').removeClass('visible');
28
}
01
// play click
02
$('.play').click(function (e) {
03
e.preventDefault();
04
playAudio();
05
});
06
// pause click
07
$('.pause').click(function (e) {
08
e.preventDefault();
09
stopAudio();
10
});
01
// forward click
02
$('.fwd').click(function (e) {
03
e.preventDefault();
04
stopAudio();
05
var next = $('.playlist li.active').next();
06
if (next.length == 0) {
07
next = $('.playlist li:first-child');
08
}
09
initAudio(next);
10
});
11
// rewind click
12
$('.rew').click(function (e) {
13
e.preventDefault();
14
stopAudio();
15
var prev = $('.playlist li.active').prev();
16
if (prev.length == 0) {
17
prev = $('.playlist li:last-child');
18
}
19
initAudio(prev);
20
});
01
// show playlist
02
$('.pl').click(function (e) {
03
e.preventDefault();
04
$('.playlist').fadeIn(300);
05
});
06
// playlist elements - click
07
$('.playlist li').click(function () {
08
stopAudio();
09
initAudio($(this));
10
});

