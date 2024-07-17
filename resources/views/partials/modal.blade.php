{{--    Modal window--}}
<div class="modal fade" id="contactFormModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content pb-5 pt-2">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M30 10L10 30M10 10L30 30" stroke="#7A7C80" stroke-width="3" stroke-linecap="round"
                              stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body mt-2 mb-4">
                <div class="mb-5">
                    <h2 class="text-center mb-4">Залиште контактну інформацію і ми Вам зателефонуємо</h2>
                    <p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M9 11.0002C9 11.7958 9.31607 12.5589 9.87868 13.1215C10.4413 13.6841 11.2044 14.0002 12 14.0002C12.7957 14.0002 13.5587 13.6841 14.1213 13.1215C14.6839 12.5589 15 11.7958 15 11.0002C15 10.2045 14.6839 9.44147 14.1213 8.87886C13.5587 8.31625 12.7957 8.00018 12 8.00018C11.2044 8.00018 10.4413 8.31625 9.87868 8.87886C9.31607 9.44147 9 10.2045 9 11.0002Z"
                                stroke="#5B5E63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path
                                d="M17.657 16.6572L13.414 20.9002C13.039 21.2748 12.5306 21.4853 12.0005 21.4853C11.4704 21.4853 10.962 21.2748 10.587 20.9002L6.343 16.6572C5.22422 15.5384 4.46234 14.1129 4.15369 12.5611C3.84504 11.0092 4.00349 9.40071 4.60901 7.93893C5.21452 6.47714 6.2399 5.22774 7.55548 4.3487C8.87107 3.46967 10.4178 3.00049 12 3.00049C13.5822 3.00049 15.1289 3.46967 16.4445 4.3487C17.7601 5.22774 18.7855 6.47714 19.391 7.93893C19.9965 9.40071 20.155 11.0092 19.8463 12.5611C19.5377 14.1129 18.7758 15.5384 17.657 16.6572Z"
                                stroke="#5B5E63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        м. Дніпро, вул. Березинська, 54
                    </p>
                    <p>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M5 4H9L11 9L8.5 10.5C9.57096 12.6715 11.3285 14.429 13.5 15.5L15 13L20 15V19C20 19.5304 19.7893 20.0391 19.4142 20.4142C19.0391 20.7893 18.5304 21 18 21C14.0993 20.763 10.4202 19.1065 7.65683 16.3432C4.8935 13.5798 3.23705 9.90074 3 6C3 5.46957 3.21071 4.96086 3.58579 4.58579C3.96086 4.21071 4.46957 4 5 4Z"
                                stroke="#5B5E63" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <a class="link" href="tel:+380964862244">+38 (096) 486 2244</a>, <a class="link"
                                                                                            href="tel:+380994569009">+38
                            (099) 456 9009</a>
                    </p>
                </div>

                <form id="modalForm" class="w-100" action="{{ route('form.submit') }}" method="POST">
                    <div class="form-group col-12 mb-4 px-0">
                        <label for="name">Ім'я</label>
                        <input type="text" class="form-control w-100" name="name" placeholder="Ваше ім'я"
                               value="{{ old('name') }}">
                        <div class="text-danger error-name" id="modal-error-name"></div>
                    </div>
                    <div class="form-group col-12 px-0">
                        <label for="phone">Номер телефону</label>
                        <input type="text" class="form-control w-100" name="phone" placeholder="Ваш номер телефону"
                               value="{{ old('phone') }}">
                        <div class="text-danger error-phone" id="modal-error-phone"></div>
                    </div>
                </form>
            </div>
            <!-- Modal Footer -->
            <div class="modal-footer px-5">
                <button type="submit" class="btn btn-orange-big w-100" onclick="$('form#modalForm').submit()">
                    ВІДПРАВИТИ
                </button>
            </div>
        </div>
    </div>
</div>

<div class="alert alert-success alert-dismissible fade" role="alert">
    Дякуємо, повідомлення успішно відправлено.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="alert alert-warning alert-dismissible fade" role="alert">
    Йой! Надто багато запитів. Будь ласка, зачекайте 1 хвилину та спробуйте знову.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>

<div class="alert alert-danger alert-dismissible fade" role="alert">
    Йой! Щось пішло не так! Будь ласка, зателефонуйте нам.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
