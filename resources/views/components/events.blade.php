<section class="feat section-padding" id="events">
    <div class="container ontop">
        <div class="row mb-60">
            <div class="col-12">
                <div class="cont md-mb50">
                    <h6 class="title-bord mb-30">Events</h6>
                    <h3 class="fw-600 fz-30 text-u d-rotate wow animated">Upcoming Events & Highlights</h3>
                    <p>Stay Informed About Our Latest Workshops, Seminars, and Conferences</p>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
        @forelse($events as $event)
                <div class=" col-md-6 mb-4">
                    <div class="item h-100">
                    <div class="row h-100">
                        <div class="col-md-4 bg-img" data-background="{{ $event->image_url ? $event->image_url : asset('assets/imgs/serv-img/default.jpg') }}"></div>
                        <div class="col-md-8">
                            <div class="info">
                                <h5 class="mb-15">{{ Str::limit($event->title, 40) }}</h5>
                                <p>{{ Str::limit($event->description, 80) }}</p>
                                <div class="mt-3">
                                    <small class="text-muted">
                                        <i class="fas fa-calendar-alt"></i> {{ $event->event_date->format('M d, Y') }} |
                                        <i class="fas fa-clock"></i> {{ $event->time }} |
                                        <i class="fas fa-map-marker-alt"></i> {{ $event->location }}
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                @empty
                <div class="col-12 item">
                    <div class="row">
                        <div class="col-12">
                            <div class="info text-center">
                                <h5 class="mb-15">No upcoming events</h5>
                                <p>Check back soon for new events and activities!</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforelse
        </div>

    </div>
    <div class="circle-blur">
        <img src="{{ asset('assets/imgs/patterns/blur1.png') }}" alt="" />
    </div>
</section>
