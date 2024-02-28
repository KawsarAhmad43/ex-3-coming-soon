document.addEventListener("DOMContentLoaded", function() {
    const videoContainer = document.querySelector('.video-container');
    const videoPlaceholder = document.getElementById('video-placeholder');
    const videoSrc = "{{ asset('assets/frontend/videos/intro.mp4') }}";

    const video = document.createElement('video');
    video.src = videoSrc;
    video.autoplay = true;
    video.loop = true;
    video.muted = true; 

    video.addEventListener('loadedmetadata', function() {
        video.style.width = "100%";
        video.style.height = "100%";
        video.style.borderRadius = "10px";
        videoPlaceholder.appendChild(video);
    });
});