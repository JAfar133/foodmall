<section class="video">
    <div id="video-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="600000">
        <div class="carousel__title">
            <h2 class="">Наша атмосфера</h2>
        </div>
        <div class="carousel-inner" role="listbox">
            @foreach ($videos as $key => $video)
                <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                    <video class="video-fluid" controls loop muted playsinline>
                        <source src="{{ asset('storage/'.$video->path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            @endforeach
            <button class="carousel-control-prev" type="button" data-bs-target="#video-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#video-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>
<script>
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
</script>
