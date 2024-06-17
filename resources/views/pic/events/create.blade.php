@extends('pic.layout.app')

@section('content')
    <div class="form-container">
        <form action="/pic/events/" method="post" enctype="multipart/form-data">
            @csrf
            <!-- Event Title -->
            <div class="form-group">
                <label for="event_title">Event Title</label>
                <input type="text" class="form-control" id="event_title" name="event_title" placeholder="Event Title" required>
            </div>
            <!-- Event Description -->
            <div class="form-group">
                <label for="event_description">Event Description</label>
                <textarea class="form-control" id="event_description" name="event_description" rows="3" required></textarea>
            </div>
            <!-- Event Dates -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="event_date">Event Date</label>
                    <input type="date" class="form-control" id="event_date" name="event_date" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="end_date">End Date</label>
                    <input type="date" class="form-control" id="end_date" name="end_date" required>
                </div>
            </div>
            <!-- Registration Dates -->
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="registration_date">Registration Date</label>
                    <input type="date" class="form-control" id="registration_date" name="registration_date" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="registration_end_date">Registration End Date</label>
                    <input type="date" class="form-control" id="registration_end_date" name="registration_end_date" required>
                </div>
            </div>
            <!-- Organizer Name -->
            <div class="form-group">
                <label for="organizer_name">Time</label>
                <input type="text" class="form-control" id="event_time" name="event_time" placeholder="00.00" required>
            </div>
            <div class="form-group">
                <label for="organizer_name">Company/Organizer Name</label>
                <input type="text" class="form-control" id="organizer_name" name="organizer_name" placeholder="Organizer Name" required>
            </div>
            <!-- Event Type -->
            <div class="form-group">
                <label for="event_type">Event Type (Seminar/Webinar)</label>
                <select id="event_type" name="event_type" class="form-control form-select" required>
                    <option value="seminar" selected>Seminar</option>
                    <option value="webinar">Webinar</option>
                </select>
            </div>
            <!-- Event Location or Link (conditionally displayed) -->
            <div class="form-group hidden" id="location_container">
                <label for="event_location">Event Location</label>
                <input type="text" class="form-control" id="event_location" name="event_location" placeholder="Location">
            </div>
            <div class="form-group hidden" id="link_container">
                <label for="event_link">Event Link</label>
                <input type="url" class="form-control" id="event_link" name="event_link" placeholder="Link">
            </div>
            <!-- Payment Status -->
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_status" id="paid" value="paid">
                    <label class="form-check-label" for="paid">Paid</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="payment_status" id="free" value="free" checked>
                    <label class="form-check-label" for="free">Free</label>
                </div>
            </div>
            <!-- Event Price (conditionally displayed) -->
            <div class="form-group hidden" id="price_container">
                <label for="event_price">Event Price</label>
                <input type="number" class="form-control" id="event_price" name="event_price" placeholder="Enter price">
            </div>
            {{-- <!-- Image Upload -->
            <div class="form-group">
                <label for="event_img">Event Image</label>
                <input type="file" class="form-control" id="event_img" name="event_img">
            </div> --}}
            <!-- Submit Button -->
            <button type="submit" class="btn-green">Create Event</button>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var paidRadio = document.getElementById('paid');
            var freeRadio = document.getElementById('free');
            var priceContainer = document.getElementById('price_container');
            var eventTypeSelect = document.getElementById('event_type');
            var locationContainer = document.getElementById('location_container');
            var linkContainer = document.getElementById('link_container');

            function togglePriceInput() {
                if (paidRadio.checked) {
                    priceContainer.classList.remove('hidden');
                } else {
                    priceContainer.classList.add('hidden');
                }
            }

            function toggleLocationOrLink() {
                if (eventTypeSelect.value === 'seminar') {
                    locationContainer.classList.remove('hidden');
                    linkContainer.classList.add('hidden');
                } else if (eventTypeSelect.value === 'webinar') {
                    linkContainer.classList.remove('hidden');
                    locationContainer.classList.add('hidden');
                }
            }

            paidRadio.addEventListener('change', togglePriceInput);
            freeRadio.addEventListener('change', togglePriceInput);
            eventTypeSelect.addEventListener('change', toggleLocationOrLink);

            // Initial setup
            togglePriceInput();
            toggleLocationOrLink();
        });
    </script>
@endsection
