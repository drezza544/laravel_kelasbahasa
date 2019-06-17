var connection = new RTCMultiConnection();
var localVideosContainer = document.getElementById('local-videos-container');
var roomId = '123123';

connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';

connection.session = {
    audio: true,
    video: true
}

connection.sdpConstraints.mandatory = {
    OfferToReceiveAudio: true,
    OfferToReceiveVideo: true
}

connection.maxParticipantsAllowed = 2;

connection.onstreamended = function (event) {
    const mediaElement = document.getElementById(event.streamid);
    if (mediaElement) {
        mediaElement.parentNode.removeChild(mediaElement);
    }
}

connection.onstream = function(event) {
    var video = event.mediaElement;
    if (event.type === 'local') {
        localVideosContainer.append(video);
    }
}

connection.checkPresence(roomId.value, function (isExist, roomid) {
    if (isExist == false) {
        connection.open(roomid);
    } else {
        alert('Kesalahan! silahkan ulang kembali');
        location.reload();
    }
});

if (navigator.connection && navigator.connection.type == 'cellular' && navigator.connection.downlinkMax <= 0.115) {
    alert('2G is not supported!');
}