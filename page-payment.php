<?php 
/* Template Name: PAYMENT TEST PAGE*/
get_header(); ?>

    <!-- inside hero -->
    <section class="page-image page-image-default section-box" style="	background: linear-gradient(rgba(20, 20, 20, .8));
	background-image: url('<?php the_field('image') ?>');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-position: initial;
	background-position: center center;
	background-size: cover;">
        <h1 class="page-title"><?php the_field('title') ?></h1>
    </section>

    <!-- BASKET - PAYMENT section -->
    <section id="basket" class="section-box">
        <div class="container">
          <div class="row">
            <div class="row mb-4 d-flex justify-content-between align-items-center">
              <div class="col-md-2 col-lg-2 col-xl-2">
                <img
                  src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-shopping-carts/img5.webp"
                  class="img-fluid rounded-3" alt="Cotton T-shirt">
              </div>
              <div class="col-md-3 col-lg-3 col-xl-3">
                <h5 class="text-muted">Shirt</h5  >
                <h5 class="text-black mb-0">Cotton T-shirt</h5  >
              </div>
              <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepDown();priceDecrase()">
                  <i class="fas fa-minus"></i>
                </button>

                <input id="form1" min="0" name="quantity" value="1" type="number"
                  class="form-control form-control-sm" />

                <button class="btn btn-link px-2"
                  onclick="this.parentNode.querySelector('input[type=number]').stepUp();priceUpper()">
                  <i class="fas fa-plus"></i>
                </button>
              </div>
              <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1 d-flex">
                <h5 class="mb-0">&#8378;</h5>
                <h5 id="price">299.99</h5>
              </div>
              <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                <a href="#!" class="text-muted"><i class="fas fa-times"></i></a>
              </div>
            </div>

            <hr class="my-4">
            
          </div>
          <center>
            <!-- alttaki buttonun onclick özelliğini kapadık   -->
            <!-- onclick="this.parentNode.parentNode.style.display = 'none';ShowPaymentSection()" -->
            <button class="btn btn-lg btn-basket" type="button">BUY NOW</button>
          </center>
        </div>
        <div id="payment" class="container d-none">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                  <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Your cart</span>
                    <span class="badge badge-secondary badge-pill">3</span>
                  </h4>
                  <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h5 class="my-0">Product name</h5 >
                        <small class="text-muted">Brief description</small>
                      </div>
                      <span class="text-muted">&#8378;12</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h5 class="my-0">Second product</h5 >
                        <small class="text-muted">Brief description</small>
                      </div>
                      <span class="text-muted">&#8378;8</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                      <div>
                        <h5 class="my-0">Third item</h5 >
                        <small class="text-muted">Brief description</small>
                      </div>
                      <span class="text-muted">&#8378;5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                      <div class="text-success">
                        <h5 class="my-0">Promo code</h5 >
                        <small>EXAMPLECODE</small>
                      </div>
                      <span class="text-success">- &#8378;5</span>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                      <span>Total (TL)</span>
                      <strong>&#8378;20</strong>
                    </li>
                  </ul>
        
                  <form class="card p-2">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Promo code" spellcheck="false" data-ms-editor="true">
                      <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary">Redeem</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-8 order-md-1">
                  <h4 class="mb-3">Billing address</h4>
                  <form class="needs-validation" novalidate="">
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="firstName">First name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Valid first name is required.
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="lastName">Last name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                          Valid last name is required.
                        </div>
                      </div>
                    </div>
        
                    <div class="mb-3">
                      <label for="username">Username</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text">@</span>
                        </div>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback" style="width: 100%;">
                          Your username is required.
                        </div>
                      </div>
                    </div>
        
                    <div class="mb-3">
                      <label for="email">Email <span class="text-muted">(Optional)</span></label>
                      <input type="email" class="form-control" id="email" placeholder="you@example.com">
                      <div class="invalid-feedback">
                        Please enter a valid email address for shipping updates.
                      </div>
                    </div>

                    <div class="mb-3">
                      <label for="tel">Telefon</label>
                      <input type="email" class="form-control" id="email" placeholder="500 000 00 00">
                      <div class="invalid-feedback">
                        Please enter a valid phone number for shipping updates.
                      </div>
                    </div>
        
                    <div class="mb-3">
                      <label for="address">Address</label>
                      <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="" spellcheck="false" data-ms-editor="true">
                      <div class="invalid-feedback">
                        Please enter your shipping address.
                      </div>
                    </div>
        
                    <div class="mb-3">
                      <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
                      <input type="text" class="form-control" id="address2" placeholder="Apartment or suite" spellcheck="false" data-ms-editor="true">
                    </div>
        
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label for="country">Country</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                          <option value="">Choose...</option>
                          <option>Turkey</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid country.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="state">State</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                          <option value="">Choose...</option>
                            <option>Adana</option>
                            <option>Adıyaman</option>
                            <option>Afyonkarahisar</option>
                            <option>Ağrı</option>
                            <option>Aksaray</option>
                            <option>Amasya</option>
                            <option>Ankara</option>
                            <option>Antalya</option>
                            <option>Ardahan</option>
                            <option>Artvin</option>
                            <option>Aydın</option>
                            <option>Balıkesir</option>
                            <option>Bartın</option>
                            <option>Batman</option>
                            <option>Bayburt</option>
                            <option>Bilecik</option>
                            <option>Bingöl</option>
                            <option>Bitlis</option>
                            <option>Bolu</option>
                            <option>Burdur</option>
                            <option>Bursa</option>
                            <option>Çanakkale</option>
                            <option>Çankırı</option>
                            <option>Çorum</option>
                            <option>Denizli</option>
                            <option>Diyarbakır</option>
                            <option>Düzce</option>
                            <option>Edirne</option>
                            <option>Elazığ</option>
                            <option>Erzincan</option>
                            <option>Erzurum</option>
                            <option>Eskişehir</option>
                            <option>Gaziantep</option>
                            <option>Giresun</option>
                            <option>Gümüşhane</option>
                            <option>Hakkâri</option>
                            <option>Hatay</option>
                            <option>Iğdır</option>
                            <option>Isparta</option>
                            <option>İstanbul</option>
                            <option>İzmir</option>
                            <option>Kahramanmaraş</option>
                            <option>Karabük</option>
                            <option>Karaman</option>
                            <option>Kars</option>
                            <option>Kastamonu</option>
                            <option>Kayseri</option>
                            <option>Kilis</option>
                            <option>Kırıkkale</option>
                            <option>Kırklareli</option>
                            <option>Kırşehir</option>
                            <option>Kocaeli</option>
                            <option>Konya</option>
                            <option>Kütahya</option>
                            <option>Malatya</option>
                            <option>Manisa</option>
                            <option>Mardin</option>
                            <option>Mersin</option>
                            <option>Muğla</option>
                            <option>Muş</option>
                            <option>Nevşehir</option>
                            <option>Niğde</option>
                            <option>Ordu</option>
                            <option>Osmaniye</option>
                            <option>Rize</option>
                            <option>Sakarya</option>
                            <option>Samsun</option>
                            <option>Şanlıurfa</option>
                            <option>Siirt</option>
                            <option>Sinop</option>
                            <option>Sivas</option>
                            <option>Şırnak</option>
                            <option>Tekirdağ</option>
                            <option>Tokat</option>
                            <option>Trabzon</option>
                            <option>Tunceli</option>
                            <option>Uşak</option>
                            <option>Van</option>
                            <option>Yalova</option>
                            <option>Yozgat</option>
                            <option>Zonguldak</option>
                        </select>
                        <div class="invalid-feedback">
                          Please provide a valid state.
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="zip">Zip</label>
                        <input type="text" class="form-control" id="zip" placeholder="" required="" spellcheck="false" data-ms-editor="true">
                        <div class="invalid-feedback">
                          Zip code required.
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4 mb-3">
                        <label for="country">İlçe</label>
                        <select class="custom-select d-block w-100" id="country" required="">
                          <option value="">Choose...</option>
                          <option>Kağıthane</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select a valid country.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="state">Mahalle</label>
                        <select class="custom-select d-block w-100" id="state" required="">
                          <option value="">Choose...</option>
                          <option>Gültepe</option>
                        </select>
                        <div class="invalid-feedback">
                          Please provide a valid state.
                        </div>
                      </div>
                    </div>
                    <hr class="mb-4">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="same-address">
                      <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                    </div>
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="save-info">
                      <label class="custom-control-label" for="save-info">Save this information for next time</label>
                    </div>
                    <hr class="mb-4">
        
                    <h4 class="mb-3">Payment</h4>
        
                    <div class="d-block my-3">
                      <div class="custom-control custom-radio">
                        <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                        <label class="custom-control-label" for="credit">Credit card</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="debit">Debit card</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                        <label class="custom-control-label" for="paypal">Paypal</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6 mb-3">
                        <label for="cc-name">Name on card</label>
                        <input type="text" class="form-control" id="cc-name" placeholder="" required="" spellcheck="false" data-ms-editor="true">
                        <small class="text-muted">Full name as displayed on card</small>
                        <div class="invalid-feedback">
                          Name on card is required
                        </div>
                      </div>
                      <div class="col-md-6 mb-3">
                        <label for="cc-number">Credit card number</label>
                        <input type="text" class="form-control" id="cc-number" placeholder="" required="" spellcheck="false" data-ms-editor="true">
                        <div class="invalid-feedback">
                          Credit card number is required
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration">Expiration</label>
                        <input type="text" class="form-control" id="cc-expiration" placeholder="" required="" spellcheck="false" data-ms-editor="true">
                        <div class="invalid-feedback">
                          Expiration date required
                        </div>
                      </div>
                      <div class="col-md-3 mb-3">
                        <label for="cc-expiration">CVV</label>
                        <input type="text" class="form-control" id="cc-cvv" placeholder="" required="" spellcheck="false" data-ms-editor="true">
                        <div class="invalid-feedback">
                          Security code required
                        </div>
                      </div>
                    </div>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                  </form>
                </div>
              </div>
        </div>
    </section>

<?php get_footer(); ?>