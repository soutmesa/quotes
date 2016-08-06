var title = 'Lonely';
var author = 'Akon';
var test = 'https://api.soundcloud.com/users/538291750/tracks.json?client_id=cover-thai-song';
var song = 'Lonely.mp3';
var pic = 'amazon.png';
var option = {
    element: document.getElementById('player1'),
    narrow: false,
    autoplay: false,
    showlrc: 0,
    mutex: true,
    theme: '#e6d0b2',
    loop: true,
    preload: 'metadata',
    music: {
        title: title,
        author: author,
        url: test,
        pic: pic,
        lrc: '[00:00.00]lrc here\n[00:01.00]aplayer'
    }
};
var ap = new APlayer(option);
ap.init();