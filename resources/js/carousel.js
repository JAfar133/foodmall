 document.addEventListener('DOMContentLoaded', function () {
    const videoCarousel = document.getElementById('video-carousel');
        const videos = videoCarousel.querySelectorAll('video');

        videoCarousel.addEventListener('slid.bs.carousel', function () {
            videos.forEach(function (video) {
                video.pause();
            });

            const activeVideo = videoCarousel.querySelector('.carousel-item.active video');

            if (activeVideo) {
                activeVideo.play();
            }
        });
    });
