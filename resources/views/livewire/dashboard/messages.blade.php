<div class="app-content content email-application">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-area-wrapper container-xxl p-0">
        <div class="content-wrapper container-xxl p-0">
            <div class="content-body">
                <div class="body-content-overlay"></div>
                <!-- Email list Area -->
                <div class="email-app-list">
                    <!-- Email search starts -->
                    <div class="app-fixed-search d-flex align-items-center">
                        <div class="sidebar-toggle d-block d-lg-none ms-1">
                            <i data-feather="menu" class="font-medium-5"></i>
                        </div>
                        <div class="d-flex align-content-center justify-content-between w-100">
                            <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="search"
                                                                      class="text-muted"></i></span>
                                <input type="text" class="form-control" id="email-search"
                                       placeholder="Search email" aria-label="Search..."
                                       aria-describedby="email-search" wire:model="search"/>
                            </div>
                        </div>
                    </div>
                    <!-- Email search ends -->

                    <!-- Email list starts -->
                    <div class="email-user-list">
                        <ul class="email-media-list">
                            @forelse($messages as $message)
                                <li class="d-flex user-mail {{$message->read_at != null ?'-read' : "" }}"
                                    {{--                                    wire:click.stop="readAtMessage({{$message->id}})"--}}
                                    onclick="showEmail({{$message->id}})"
                                >
                                    <div class="mail-left pe-50">
                                        <div class="avatar">
                                            <img src="{{asset('assets/dashboard/images/portrait/small/avatar-s-17.jpg')}}"
                                                 alt="Generic placeholder image"/>
                                        </div>
                                    </div>
                                    <div class="mail-body">
                                        <div class="mail-details">
                                            <div class="mail-items">
                                                <h5 class="mb-25">{{$message->name}}</h5>
                                                <span class="text-truncate">{{__('dashboard.main.New Contact')}} 🤩</span>
                                            </div>
                                            {{--                                            <div class="mail-meta-item">--}}
                                            {{--                                                @if($message->read_at == null)--}}
                                            {{--                                                    <span class="me-50 bullet bullet-danger bullet-sm"></span>--}}
                                            {{--                                                @else--}}
                                            {{--                                                    <span class="mx-50 bullet bullet-success bullet-sm"></span>--}}
                                            {{--                                                @endif--}}
                                            {{--                                                <span class="mail-date">{{$message->created_at}}</span>--}}
                                            {{--                                            </div>--}}
                                        </div>
                                        <div class="mail-message">
                                            <p class="mb-0 text-truncate">
                                                {!! substr($message->message,0,100) !!}
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <div class="no-results">
                                    <h5>{{__('dashboard.main.No Items Found')}}</h5>
                                </div>
                            @endforelse
                        </ul>

                    </div>
                    <!-- Email list ends -->
                </div>
                <!--/ Email list Area -->
                <!-- Detailed Email View -->
                @foreach($messages as $message)
                    <div class="email-app-details email-app-details{{$message->id}}">
                        <!-- Detailed Email Header starts -->
                        <div class="email-detail-header">
                            <div class="email-header-left d-flex align-items-center">
                                        <span class="go-back me-1"><i data-feather="chevron-left"
                                                                      class="font-medium-4"></i></span>
                                <h4 class="email-subject mb-0">{{$message->subject}}</h4>
                            </div>

                            <div class="email-header-right ms-2 ps-1" wire:click="deleteConfirm({{$message->id}})">
                                <a class="list-inline m-0">
                                    <li class="list-inline-item">
                                        <span class="action-icon">
                                            <i data-feather="trash" class="font-medium-2"></i>
                                        </span>
                                    </li>
                                </a>
                            </div>
                        </div>
                        <!-- Detailed Email Header ends -->

                        <!-- Detailed Email Content starts -->
                        <div class="email-scroll-area">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header email-detail-head">
                                            <div class="user-details d-flex justify-content-between align-items-center flex-wrap">
                                                <div class="avatar me-75">
                                                    <img src="{{asset('assets/dashboard/images/portrait/small/avatar-s-9.jpg')}}"
                                                         alt="avatar img holder" width="48" height="48"/>
                                                </div>
                                                <div class="mail-items">
                                                    <h5 class="mb-0">{{$message->name}}</h5>
                                                    <div class="email-info-dropup dropdown">
                                                        {{$message->email}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mail-meta-item d-flex align-items-center">
                                                <small class="mail-date-time text-muted">{{$message->created_at}}</small>
                                            </div>
                                        </div>
                                        <div class="card-body mail-message-wrapper pt-2">
                                            <div class="mail-message">
                                                <p class="card-text">{{$message->subject}}</p>
                                                <p class="card-text">
                                                    {{$message->message}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Detailed Email Content ends -->
                    </div>
            @endforeach

            <!--/ Detailed Email View -->
            </div>

        </div>
    </div>
    {{ $messages->links("vendor.livewire.bootstrap") }}
</div>
