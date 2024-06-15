@extends('pic.layout.app')

@section('content')
    <div class="form-container">
        <form>
            <div class="form-group">
                <label for="eventTitle">Event Title</label>
                <input type="text" class="form-control" id="eventTitle" placeholder="Event Title">
            </div>
            <div class="form-group">
                <label for="eventDescription">Event Description</label>
                <textarea class="form-control" id="eventDescription" rows="3"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="eventDate">Event Date</label>
                    <input type="date" class="form-control" id="eventDate">
                </div>
                <div class="form-group col-md-6">
                    <label for="endDate">End Date</label>
                    <input type="date" class="form-control" id="endDate">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="registrationDate">Registration Date</label>
                    <input type="date" class="form-control" id="registrationDate">
                </div>
                <div class="form-group col-md-6">
                    <label for="registrationEndDate">End Date</label>
                    <input type="date" class="form-control" id="registrationEndDate">
                </div>
            </div>
            <div class="form-group">
                <label for="organizerName">Company/Organizer Name</label>
                <input type="text" class="form-control" id="organizerName" placeholder="Organizer Name">
            </div>

            <div class="form-group">
                <label for="eventType">Event Type (Seminar/Webinar)</label>
                <select id="eventType" class="form-control form-select">
                    <option value="seminar" selected>Seminar</option>
                    <option value="webinar">Webinar</option>
                </select>
            </div>

            <div class="form-group hidden" id="locationContainer">
                <label for="eventLocation">Event Location</label>
                <input type="text" class="form-control" id="eventLocation" placeholder="Location">
            </div>
            <div class="form-group hidden" id="linkContainer">
                <label for="eventLink">Event Link</label>
                <input type="url" class="form-control" id="eventLink" placeholder="Link">
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentStatus" id="paid" value="paid">
                    <label class="form-check-label" for="paid">
                        Paid
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentStatus" id="free" value="free"
                        checked>
                    <label class="form-check-label" for="free">
                        Free
                    </label>
                </div>
            </div>
            <div class="form-group hidden" id="priceContainer">
                <label for="eventPrice">Event Price</label>
                <input type="number" class="form-control" id="eventPrice" placeholder="Enter price">
            </div>
            <a href="" class="btn-green">Next</a>
        </form>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var paidRadio = document.getElementById('paid');
            var freeRadio = document.getElementById('free');
            var priceContainer = document.getElementById('priceContainer');
            var eventTypeSelect = document.getElementById('eventType');
            var locationContainer = document.getElementById('locationContainer');
            var linkContainer = document.getElementById('linkContainer');

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
