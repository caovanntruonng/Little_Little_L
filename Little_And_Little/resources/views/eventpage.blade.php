@extends('templates.default')
@section('eventpage')
<main>
    <div class="background">
        <div class="decorate">
            <img src="/assets/images/eventpage/event_1.png" alt="">
            <img src="/assets/images/eventpage/event_2.png" alt="">
        </div>
        <div class="eventpage pt-5">
            <div class="title text-center mt-3">
                <h1>Sự kiện nổi bật</h1>
            </div>
            <div class="carousel-wrapper d-flex align-items-center">
                <button type="button" class="prev-btn button-3d ms-4">
                    <img src="/assets/images/icon/Arrow - Down 2.png" alt="">
                </button>
                <div class="carousel">

                    @foreach ($events as $event)
                    <div class="item">
                        <div class="card">
                            <img class="card-img-top" src="{{ $event->image }}" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{ $event->name }}</h4>
                                <h4 class="card-text">{{ $event->location }}</h4>
                                <h4 class="card-date">
                                    <img src="/assets/images/icon/calendar.png" alt="">&ensp;
                                    {{ date('d/m/Y', strtotime($event->start_date)) }} -
                                    {{ date('d/m/Y', strtotime($event->end_date)) }}
                                </h4>
                                <h4 class="card-price">{{ number_format($event->price, 0, ',', '.') . ' VNĐ' }}</h4>
                                <a href="{{ route('event.show', $event->id) }}">
                                    <button class="button-submit" type="submit">Xem chi tiết</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                <button type="button" class="next-btn button-3d me-4">
                    <img src="/assets/images/icon/Arrow - Down 2.png" alt="">
                </button>
            </div>
        </div>
    </div>
</main>
@endsection