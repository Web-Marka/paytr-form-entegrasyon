<form class="space-y-6" action="{{ route('odeme.sonuc') }}" method="post" id="paymentForm"
    style="padding-bottom: 60px;">
    @csrf
    <input type="hidden" name="product_name">
    <input type="hidden" name="product_quantity" value="1">
    <input type="hidden" name="product_price" value="4299">
  
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <div class="mb-3 form-group">
            <label for="name">Ad *</label>
            <input type="text" name="name" id="name"
                placeholder="Adınızı Giriniz" class="form-input" />
        </div>
        <div class="mb-3 form-group">
            <label for="surname">Soyad *</label>
            <input type="text" name="surname" id="surname"
                placeholder="Soyadınızı Giriniz" class="form-input" />
        </div>
        <div class="mb-3 form-group">
            <label for="email">E-Posta Adresiniz *</label>
            <input type="email" name="email" id="email"
                placeholder="E-Posta Adresiniz" class="form-input" />
        </div>
        <div class="mb-3 form-group">
            <label for="phone">Telefon *</label>
            <input type="tel" name="phone" id="phone"
                placeholder="Telefon Numaranız" class="form-input" />
        </div>
        <div class="mb-3 form-group">
            <label for="city">İl *</label>
            <input type="text" name="city" id="city"
                placeholder="Bulunduğunuz İl" class="form-input" />
        </div>
        <div class="mb-3 form-group">
            <label for="town">İlçe *</label>
            <input type="text" name="town" placeholder="Bulunduğunuz İlçe"
                class="form-input" />
        </div>
        <div class="mb-3 form-group">
            <label for="address">Adresiniz *</label>
            <textarea name="address" id="address" placeholder="Adresinizi Giriniz" class="form-input"></textarea>
        </div>
        <div class="mb-3 form-group">
            <label class="text-white-dark text-[16px] inline-block">* Gerekli
                Alanlar</label><br>
            <label class="text-white-dark text-[16px] inline-block">
                * Fatura bilgilerinizi girdikten sonra PAYTR güvenli ödeme sayfasına
                yönlendirileceksiniz.
            </label><br>
            <label class="flex items-center mt-1 cursor-pointer">
                <input type="checkbox" name="mesafeliSatis" checked class="form-checkbox" />
                <span class="text-white-dark">
                    <a @click="toggle" style="font-weight: bold; color: blue;">
                        Mesafeli Satış Sözleşmesini</a> Okudum ve
                    Onaylıyorum.</span>
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary text-center block w-full">Fatura Bilgilerini
        Onayla</button>
</form>

// validate.min.js ile Doğrulama işlemleri

<script type="text/javascript">
        $(document).ready(function() {
            $('#paymentForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    surname: {
                        required: true,
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    phone: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    town: {
                        required: true,
                    },
                    city: {
                        required: true,
                    },
                    mesafeliSatis: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: 'Bu Alan Gerekli!',
                    },
                    surname: {
                        required: 'Bu Alan Gerekli!',
                    },
                    email: {
                        required: 'Bu Alan Gerekli!',
                        email: 'Lütfen geçerli bir e-posta adresi girin.'
                    },
                    phone: {
                        required: 'Bu Alan Gerekli!',
                    },
                    address: {
                        required: 'Bu Alan Gerekli!',
                    },
                    town: {
                        required: 'Bu Alan Gerekli!',
                    },
                    city: {
                        required: 'Bu Alan Gerekli!',
                    },
                    mesafeliSatis: {
                        required: 'Mesafeli Satış Sözleşmesi Kutucuğunu İşaretlemelisiniz!',
                    },
                },
                errorElement: 'p',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    error.addClass('text-danger'); // text-danger sınıfı eklendi
                    error.addClass('mt-1'); // mt-1 sınıfı eklendi
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                },
            });
        });
    </script>
