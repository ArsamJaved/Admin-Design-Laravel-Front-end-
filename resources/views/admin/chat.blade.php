@extends('layouts.admin.admin_master')

@push('css')

@endpush

@section('content')

<div class="content">
    <div id="chat">
        <div class="p-md-4 p-3">
            <div class="chat-container">
                <div class="row">
                    <!-- Sidebar -->
                    <div class="col-lg-5 chat-sidebar my-lg-0 my-3">
                        <div class="card p-3 p-xl-1 chat-sidebar me-3 border-0" id="chat-sidebar">
                            <div class="form-icon-container mb-4 d-sm-none d-xl-block"><input class="form-control form-icon-input" type="text" placeholder="People, Groups and Messages"><svg class="svg-inline--fa fa-user text-body fs-9 form-icon" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                    <path fill="currentColor" d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"></path>
                                </svg>
                            </div>
                            <ul class="nav nav-tabs border rounded-2 d-flex justify-content-between">
                                <li class="nav-item">
                                    <a class="nav-link px-md-4 py-1 border-0 rounded-2 active" data-bs-toggle="tab" href="#all">All</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-md-4 py-1 border-0 rounded-2" data-bs-toggle="tab" href="#read">Read</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link px-md-4 py-1 border-0 rounded-2" data-bs-toggle="tab" href="#unread">Unread</a>
                                </li>
                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content mt-3 messages-list">
                                <div class="tab-pane fade show active" id="all">
                                    <div class="message-tab">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/20.webp" alt="Avatar">
                                        <div class="message-info">
                                            <div class="name">Sharuka Nijibum</div>
                                            <div class="text-muted"><small>This is a message from you</small></div>
                                        </div>
                                        <div class="text-muted"><small>Just now</small></div>
                                    </div>
                                    <div class="message-tab">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/20.webp" alt="Avatar">
                                        <div class="message-info">
                                            <div class="name">Urito Nisemuno</div>
                                            <div class="text-muted"><small>Say Hi to your new friend now</small></div>
                                        </div>
                                        <div class="text-muted"><small>Yesterday, 11 PM</small></div>
                                    </div>
                                    <div class="message-tab">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/20.webp" alt="Avatar">
                                        <div class="message-info">
                                            <div class="name">Xiang Ledepisipang</div>
                                            <div class="text-muted"><small>We can also discuss prese...</small></div>
                                        </div>
                                        <div class="text-muted"><small>Yesterday, 10 PM</small></div>
                                    </div>
                                    <div class="message-tab">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/20.webp" alt="Avatar">
                                        <div class="message-info">
                                            <div class="name">Sharuka Nijibum</div>
                                            <div class="text-muted"><small>This is a message from you</small></div>
                                        </div>
                                        <div class="text-muted"><small>Just now</small></div>
                                    </div>
                                    <div class="message-tab">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/20.webp" alt="Avatar">
                                        <div class="message-info">
                                            <div class="name">Sharuka Nijibum</div>
                                            <div class="text-muted"><small>This is a message from you</small></div>
                                        </div>
                                        <div class="text-muted"><small>Just now</small></div>
                                    </div>
                                    <div class="message-tab">
                                        <img src="https://prium.github.io/phoenix/v1.18.0/assets/img/team/20.webp" alt="Avatar">
                                        <div class="message-info">
                                            <div class="name">Sharuka Nijibum</div>
                                            <div class="text-muted"><small>This is a message from you</small></div>
                                        </div>
                                        <div class="text-muted"><small>Just now</small></div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="read">
                                    <!-- Read messages content -->
                                    <p>Read messages will appear here.</p>
                                </div>

                                <div class="tab-pane fade" id="unread">
                                    <!-- Unread messages content -->
                                    <p>Unread messages will appear here.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Chat Area -->
                    <div class="col-lg-7 my-lg-0 my-3">
                        <div class="card main-chats-right">
                            <div class="card-header d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <h5 class="mb-0">Sharuka Nijibum</h5>
                                    <span class="badge bg-success ms-2 d-md-block d-none">Active now</span>
                                </div>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-primary btn-sm me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24">
                                            <path fill="currentColor" d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02z" />
                                        </svg>
                                    </button>
                                    <button class="btn btn-primary btn-sm me-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 24 24">
                                            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                                <path d="m16 13l5.223 3.482a.5.5 0 0 0 .777-.416V7.87a.5.5 0 0 0-.752-.432L16 10.5" />
                                                <rect width="14" height="12" x="2" y="6" rx="2" />
                                            </g>
                                        </svg>
                                    </button>
                                    <div class="dropdown">
                                        <button class="btn btn-light btn-sm dropdown-toggle border" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="1.3em" height="1.3em" viewBox="0 0 256 256">
                                                <path fill="currentColor" d="M112 60a16 16 0 1 1 16 16a16 16 0 0 1-16-16m16 52a16 16 0 1 0 16 16a16 16 0 0 0-16-16m0 68a16 16 0 1 0 16 16a16 16 0 0 0-16-16" />
                                            </svg>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                            <li><a class="dropdown-item" href="#">Add to favourites</a></li>
                                            <li><a class="dropdown-item" href="#">View profile</a></li>
                                            <li><a class="dropdown-item" href="#">Report</a></li>
                                            <li><a class="dropdown-item" href="#">Manage notifications</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body chat-body">
                                <div class="mt-4 chat-container">
                                    <div class="message-left">
                                        <img src="https://via.placeholder.com/40" class="avatar" alt="User Avatar">
                                        <div class="message-bubble ms-3 light-bg">
                                            <p>I have got a date at a quarter to eight; I’ll see you at the gate, so don’t be late.</p>
                                            <small class="text-muted">Yesterday, 10 AM</small>
                                        </div>
                                    </div>

                                    <div class="message-left">
                                        <img src="https://via.placeholder.com/40" class="avatar" alt="User Avatar">
                                        <div class="message-bubble ms-3 light-bg">
                                            <p>You know New York, you need New York, you know you need a unique New York.</p>
                                            <small class="text-muted">Yesterday, 10 AM</small>
                                        </div>
                                    </div>

                                    <div class="message-right">
                                        <div class="message-bubble primary-bg text-white">
                                            <p>This is a message from you</p>
                                            <small class="text-white-50">Yesterday, 10 AM</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <input class="chat-textarea outline-none scrollbar mb-1" contenteditable="true" placeholder="Type your message...">
                                <div class="d-flex justify-content-between align-items-end">
                                    <div>
                                        <button class="btn btn-link py-0 ps-0 pe-2 text-body fs-9 btn-emoji" data-picmo="data-picmo">
                                            <svg class="svg-inline--fa fa-face-smile" aria-hidden="true" focusable="false" data-prefix="far" data-icon="face-smile" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M464 256A208 208 0 1 0 48 256a208 208 0 1 0 416 0zM0 256a256 256 0 1 1 512 0A256 256 0 1 1 0 256zm177.6 62.1C192.8 334.5 218.8 352 256 352s63.2-17.5 78.4-33.9c9-9.7 24.2-10.4 33.9-1.4s10.4 24.2 1.4 33.9c-22 23.8-60 49.4-113.6 49.4s-91.7-25.5-113.6-49.4c-9-9.7-8.4-24.9 1.4-33.9s24.9-8.4 33.9 1.4zM144.4 208a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm192-32a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"></path>
                                            </svg>
                                        </button>
                                        <label class="btn btn-link py-0 px-2 text-body fs-9" for="chatPhotos-0">
                                            <svg class="svg-inline--fa fa-image" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="image" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zM323.8 202.5c-4.5-6.6-11.9-10.5-19.8-10.5s-15.4 3.9-19.8 10.5l-87 127.6L170.7 297c-4.6-5.7-11.5-9-18.7-9s-14.2 3.3-18.7 9l-64 80c-5.8 7.2-6.9 17.1-2.9 25.4s12.4 13.6 21.6 13.6h96 32H424c8.9 0 17.1-4.9 21.2-12.8s3.6-17.4-1.4-24.7l-120-176zM112 192a48 48 0 1 0 0-96 48 48 0 1 0 0 96z"></path>
                                            </svg>
                                        </label>
                                        <input class="d-none" type="file" accept="image/*" id="chatPhotos-0">
                                        <label class="btn btn-link py-0 px-2 text-body fs-9" for="chatAttachment-0">
                                            <svg class="svg-inline--fa fa-paperclip" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paperclip" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M364.2 83.8c-24.4-24.4-64-24.4-88.4 0l-184 184c-42.1 42.1-42.1 110.3 0 152.4s110.3 42.1 152.4 0l152-152c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-152 152c-64 64-167.6 64-231.6 0s-64-167.6 0-231.6l184-184c46.3-46.3 121.3-46.3 167.6 0s46.3 121.3 0 167.6l-176 176c-28.6 28.6-75 28.6-103.6 0s-28.6-75 0-103.6l144-144c10.9-10.9 28.7-10.9 39.6 0s10.9 28.7 0 39.6l-144 144c-6.7 6.7-6.7 17.7 0 24.4s17.7 6.7 24.4 0l176-176c24.4-24.4 24.4-64 0-88.4z"></path>
                                            </svg>
                                        </label>
                                        <input class="d-none" type="file" id="chatAttachment-0">
                                        <button class="btn btn-link py-0 px-2 text-body fs-9">
                                            <svg class="svg-inline--fa fa-microphone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="microphone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M192 0C139 0 96 43 96 96V256c0 53 43 96 96 96s96-43 96-96V96c0-53-43-96-96-96zM64 216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 89.1 66.2 162.7 152 174.4V464H120c-13.3 0-24 10.7-24 24s10.7 24 24 24h72 72c13.3 0 24-10.7 24-24s-10.7-24-24-24H216V430.4c85.8-11.7 152-85.3 152-174.4V216c0-13.3-10.7-24-24-24s-24 10.7-24 24v40c0 70.7-57.3 128-128 128s-128-57.3-128-128V216z"></path>
                                            </svg>
                                        </button>
                                        <button class="btn btn-link py-0 px-2 text-body fs-9">
                                            <svg class="svg-inline--fa fa-ellipsis" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="ellipsis" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary" type="button">
                                            Send
                                            <svg class="svg-inline--fa fa-paper-plane ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="paper-plane" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                                <path fill="currentColor" d="M498.1 5.6c10.1 7 15.4 19.1 13.5 31.2l-64 416c-1.5 9.7-7.4 18.2-16 23s-18.9 5.4-28 1.6L284 427.7l-68.5 74.1c-8.9 9.7-22.9 12.9-35.2 8.1S160 493.2 160 480V396.4c0-4 1.5-7.8 4.2-10.7L331.8 202.8c5.8-6.3 5.6-16-.4-22s-15.7-6.4-22-.7L106 360.8 17.7 316.6C7.1 311.3 .3 300.7 0 288.9s5.9-22.8 16.1-28.7l448-256c10.7-6.1 23.9-5.5 34 1.4z"></path>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection