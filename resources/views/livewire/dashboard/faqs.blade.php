<section id="basic-datatable">
    <div class="row">
        <div class="col-3">
            <div class="mb-2">
                <input type="search" class="form-control" wire:model="search"
                       placeholder="{{trans('dashboard.main.Search')}}">
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <table class="datatables-basic table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>{{trans('dashboard.faq.question')}}</th>
                        <th>{{trans('dashboard.faq.answer')}}</th>
                        <th>{{trans('dashboard.main.available')}}</th>
                        <th> {{trans('dashboard.main.Created At')}}</th>
                        <th> {{trans('dashboard.main.Actions')}}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($faqs as $faq)
                        <tr @if($loop->odd) class="odd" @endif >
                            <td>{{ $loop->iteration}}</td>
                            <td>{!! $faq->question !!}...</td>
                            <td>{!! $faq->answer !!}...</td>
                            <td>
                                <div class="form-check form-check-success form-switch">
                                    <input type="checkbox" @if($faq->available == 1) checked="" @endif
                                    wire:click="availability({{$faq->id}})" class="form-check-input" id="customSwitch4">
                                </div>
                            </td>
                            <td>{{ $faq->created_at->diffForHumans() }}</td>
                            <td>
                                <a href="{{route('faqs.edit' , ['lang' => app()->getLocale(),'faq'=>$faq])}}"
                                   class="text-success mr-2">
                                    <i data-feather='edit'></i>{{trans('dashboard.main.edit')}}
                                </a>
                                <a wire:click="deleteConfirm({{$faq->id}})"
                                   {{--                                   id="alert-confirm-{{ $loop->iteration }}"--}}
                                   href="#" title="delete" class="text-danger mr-2 ">
                                    <i data-feather='trash-2'></i>{{trans('dashboard.main.delete')}}
                                </a>

                                {{--                                <form title="delete" id="delete-form-{{ $loop->iteration }}" action="{{ route("faqs.destroy", ['lang' => app()->getLocale(),"faq" => $faq]) }}" method="post" style="display: none">--}}
                                {{--                                    @csrf--}}
                                {{--                                    @method("delete")--}}
                                {{--                                    @hidden(id, $faq->id)--}}
                                {{--                                </form>--}}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12">
            {{ $faqs->links("vendor.livewire.bootstrap-livewire") }}
        </div>
    </div>
    <!-- Modal to add new record -->
    <div class="modal modal-slide-in fade" id="modals-slide-in">
        <div class="modal-dialog sidebar-sm">
            <form class="add-new-record modal-content pt-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×
                </button>
                <div class="modal-header mb-1">
                    <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                </div>
                <div class="modal-body flex-grow-1">
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                        <input type="text" class="form-control dt-full-name"
                               id="basic-icon-default-fullname" placeholder="John Doe"
                               aria-label="John Doe"/>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-post">Post</label>
                        <input type="text" id="basic-icon-default-post" class="form-control dt-post"
                               placeholder="Web Developer" aria-label="Web Developer"/>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-email">Email</label>
                        <input type="text" id="basic-icon-default-email" class="form-control dt-email"
                               placeholder="john.doe@example.com" aria-label="john.doe@example.com"/>
                        <small class="form-text"> You can use letters, numbers & periods </small>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                        <input type="text" class="form-control dt-date" id="basic-icon-default-date"
                               placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY"/>
                    </div>
                    <div class="mb-4">
                        <label class="form-label" for="basic-icon-default-salary">Salary</label>
                        <input type="text" id="basic-icon-default-salary" class="form-control dt-salary"
                               placeholder="$12000" aria-label="$12000"/>
                    </div>
                    <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

</section>



