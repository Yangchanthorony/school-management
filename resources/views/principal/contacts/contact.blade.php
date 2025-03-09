@extends('components.master')
@section('contents')
    <div class="card p-3">
        <div class="card-body p-4">
            <h3 class="mb-5">ប្រអប់សារ</h3>
            <!-- Scrollable Container -->
            <div class="row flex-nowrap overflow-auto custom-scrollbar" style="gap: 1rem; max-width: 100%;">

                <div class="message-item col-2 text-center active">
                    <a href="#">
                        <img style="width: 50px;" src="{{ asset('assets/img/messages-1.jpg') }}" alt="" class="rounded-circle align-center">
                        <div class="mt-1 d-lg-block d-md-block d-none">
                            <span style="font-size: 15px;">Tony Ja</span>
                            <p style="font-size: 10px;">6 hrs. ago</p>
                        </div>
                    </a>
                    <div class="active-user"></div>
                </div>

                <div class="message-item col-2 text-center">
                    <a href="#">
                        <img style="width: 50px;" src="{{ asset('assets/img/messages-2.jpg') }}" alt="" class="rounded-circle">
                        <div class="mt-1 d-lg-block d-md-block d-none">
                            <span style="font-size: 15px;">Tony Ja</span>
                            <p style="font-size: 10px;">6 hrs. ago</p>
                        </div>
                    </a>
                </div>

                <div class="message-item col-2 text-center">
                    <a href="#">
                        <img style="width: 50px;" src="{{ asset('assets/img/messages-2.jpg') }}" alt="" class="rounded-circle">
                        <div class="mt-1 d-lg-block d-md-block d-none">
                            <span style="font-size: 15px;">Tony Ja</span>
                            <p style="font-size: 10px;">6 hrs. ago</p>
                        </div>
                    </a>
                </div>

                <div class="message-item col-2 text-center">
                    <a href="#">
                        <img style="width: 50px;" src="{{ asset('assets/img/messages-2.jpg') }}" alt="" class="rounded-circle">
                        <div class="mt-1 d-lg-block d-md-block d-none">
                            <span style="font-size: 15px;">Anna Nelson</span>
                            <p style="font-size: 10px;">6 hrs. ago</p>
                        </div>
                    </a>
                </div>

                <div class="message-item col-2 text-center">
                    <a href="#">
                        <img style="width: 50px;" src="{{ asset('assets/img/messages-2.jpg') }}" alt="" class="rounded-circle">
                        <div class="mt-1 d-lg-block d-md-block d-none">
                            <span style="font-size: 15px;">Anna Nelson</span>
                            <p style="font-size: 10px;">6 hrs. ago</p>
                        </div>
                    </a>
                </div>

                <div class="message-item col-2 text-center active">
                    <a href="#">
                        <img style="width: 50px;" src="{{ asset('assets/img/messages-2.jpg') }}" alt="" class="rounded-circle">
                        <div class="mt-1 d-lg-block d-md-block d-none">
                            <span style="font-size: 15px;">Anna Nelson</span>
                            <p style="font-size: 10px;">6 hrs. ago</p>
                        </div>
                        
                    </a>
                    <div class="active-user"></div>
                </div>

                

                <!-- Add more blocks here as needed -->

            </div>

            <hr>

            <div class="chat-section custom-scrollbar p-lg-4 p-md-4 p-3" style="max-height: 300px; overflow-y: auto; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">

                <!-- User Message -->
                <div class="user-message mb-3 d-flex align-items-start">
                    <img style="width: 50px;" src="{{ asset('assets/img/messages-1.jpg') }}" alt="" class="rounded-circle me-3">
                    <div class="bg-light p-3 rounded">
                        <strong>User:</strong>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos quidem praesentium mollitia.</p>
                    </div>
                </div>

                <!-- Admin Message -->
                <div class="admin-message mb-3 d-flex align-items-end justify-content-end">
                    <div class="bg-primary text-white p-3 rounded">
                        <strong>Admin:</strong>
                        <p>Thank you for reaching out! How can I help you?</p>
                    </div>
                    <img style="width: 50px;" src="{{ asset('assets/img/profile-img.jpg') }}" alt="" class="rounded-circle ms-3">
                </div>

                <!-- Add more messages dynamically -->

                <form method="POST">
                    @csrf
                    <div class="input-group">
                        <textarea class="form-control shadow-none" name="message" placeholder="Type your message..." rows="2" required></textarea>
                        <button type="submit" class="btn btn-success px-4">Send</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
