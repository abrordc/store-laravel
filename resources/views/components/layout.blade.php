<!DOCTYPE html>
<html lang="en">

<head>
<title>{{ $title }} | E-commerce</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="author" content="TemplatesJungle">
  <meta name="keywords" content="Online Store">
  <meta name="description" content="Stylish - Shoes Online Store HTML Template">

  <link rel="stylesheet" href="{{ asset('css/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
    rel="stylesheet">
</head>

<body>
    <x-preloader></x-preloader>

    <x-search-top></x-search-top>

  <!-- quick view -->
  <div class="modal fade" id="modaltoggle" aria-hidden="true" tabindex="-1">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <div class="col-lg-12 col-md-12 me-3">
            <div class="image-holder">
              <img src="images/summary-item1.jpg" alt="Shoes">
            </div>
          </div>
          <div class="col-lg-12 col-md-12">
            <div class="summary">
              <div class="summary-content fs-6">
                <div class="product-header d-flex justify-content-between mt-4">
                  <h3 class="display-7">Running Shoes For Men</h3>
                  <div class="modal-close-btn">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                  </div>
                </div>
                <span class="product-price fs-3">$99</span>
                <div class="product-details">
                  <p class="fs-7">Buy good shoes and a good mattress, because when you're not in one you're in the
                    other. With four pairs of shoes, I can travel the world.</p>
                </div>
                <ul class="select">
                  <li>
                    <strong>Colour Shown:</strong> Red, White, Black
                  </li>
                  <li>
                    <strong>Style:</strong> SM3018-100
                  </li>
                </ul>
                <div class="variations-form shopify-cart">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="quantity d-flex pb-4">
                        <div
                          class="qty-number align-top qty-number-plus d-flex justify-content-center align-items-center text-center">
                          <span class="increase-qty plus">
                            <svg class="plus">
                              <use xlink:href="#plus"></use>
                            </svg>
                          </span>
                        </div>
                        <input type="number" id="quantity_001" class="input-text text-center" step="1" min="1" name="quantity" value="1" title="Qty">
                        <div
                          class="qty-number qty-number-minus d-flex justify-content-center align-items-center text-center">
                          <span class="increase-qty minus">
                            <svg class="minus">
                              <use xlink:href="#minus"></use>
                            </svg>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <a rel="nofollow" data-no-instant="" href="#" class="out-stock button">Out of stock</a>
                      <button type="submit" class="btn btn-medium btn-black hvr-sweep-to-right">Add to cart</button>
                    </div>
                  </div>
                </div>
                <!-- variations-form -->
                <div class="categories d-flex flex-wrap pt-3">
                  <strong class="pe-2">Categories:</strong>
                  <a href="#" title="categories">Clothing,</a>
                  <a href="#" title="categories">Men's Clothes,</a>
                  <a href="#" title="categories">Tops & T-Shirts</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / quick view -->

  <div class="modal fade" id="modallong" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h2 class="modal-title fs-5">Cart</h2>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="shopping-cart">
            <div class="shopping-cart-content">
              <div class="mini-cart cart-list p-0 mt-3">
                <div class="mini-cart-item d-flex border-bottom pb-3">
                  <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                    <a href="#" title="product-image">
                      <img src="images/single-product-thumb1.jpg" class="img-fluid" alt="single-product-item">
                    </a>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-8">
                    <div class="product-header d-flex justify-content-between align-items-center mb-3">
                      <h4 class="product-title fs-6 me-5">Sport Shoes For Men</h4>
                      <a href="" class="remove" aria-label="Remove this item" data-product_id="11913"
                        data-cart_item_key="abc" data-product_sku="">
                        <svg class="close">
                          <use xlink:href="#close"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="quantity-price d-flex justify-content-between align-items-center">
                      <div class="input-group product-qty">
                        <button type="button"
                          class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                          data-type="minus">
                          <svg width="16" height="16">
                            <use xlink:href="#minus"></use>
                          </svg>
                        </button>
                        <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                        <button type="button" class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                          data-type="plus">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="price-code">
                        <span class="product-price fs-6">$99</span>
                      </div>
                    </div>
                    <!-- quantity-price -->
                  </div>
                </div>
              </div>
              <div class="mini-cart cart-list p-0 mt-3">
                <div class="mini-cart-item d-flex border-bottom pb-3">
                  <div class="col-lg-2 col-md-3 col-sm-2 me-4">
                    <a href="#" title="product-image">
                      <img src="images/single-product-thumb2.jpg" class="img-fluid" alt="single-product-item">
                    </a>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-8">
                    <div class="product-header d-flex justify-content-between align-items-center mb-3">
                      <h4 class="product-title fs-6 me-5">Brand Shoes For Men</h4>
                      <a href="" class="remove" aria-label="Remove this item" data-product_id="11913"
                        data-cart_item_key="abc" data-product_sku="">
                        <svg class="close">
                          <use xlink:href="#close"></use>
                        </svg>
                      </a>
                    </div>
                    <div class="quantity-price d-flex justify-content-between align-items-center">
                      <div class="input-group product-qty">
                        <button type="button"
                          class="quantity-left-minus btn btn-light rounded-0 rounded-start btn-number"
                          data-type="minus">
                          <svg width="16" height="16">
                            <use xlink:href="#minus"></use>
                          </svg>
                        </button>
                        <input type="text" name="quantity" class="form-control input-number quantity" value="1">
                        <button type="button" class="quantity-right-plus btn btn-light rounded-0 rounded-end btn-number"
                          data-type="plus">
                          <svg width="16" height="16">
                            <use xlink:href="#plus"></use>
                          </svg>
                        </button>
                      </div>
                      <div class="price-code">
                        <span class="product-price fs-6">$99</span>
                      </div>
                    </div>
                    <!-- quantity-price -->
                  </div>
                </div>
              </div>
              <!-- cart-list -->
              <div class="mini-cart-total d-flex justify-content-between py-4">
                <span class="fs-6">Subtotal:</span>
                <span class="special-price-code">
                  <span class="price-amount amount fs-6" style="opacity: 1;">
                    <bdi>
                      <span class="price-currency-symbol">$</span>198.00 </bdi>
                  </span>
                </span>
              </div>
              <div class="modal-footer my-4 justify-content-center">
                <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">View Cart</button>
                <button type="button"
                  class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Checkout</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cart view -->

  <div class="modal fade" id="modallogin" tabindex="-1" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-fullscreen-md-down modal-md modal-dialog-centered" role="document">
      <div class="modal-content p-4">
        <div class="modal-header mx-auto border-0">
          <h2 class="modal-title fs-3 fw-normal">Login</h2>
        </div>
        <div class="modal-body">
          <div class="login-detail">
            <div class="login-form p-0">
              <div class="col-lg-12 mx-auto">
                <form id="login-form">
                  <input type="text" name="username" placeholder="Username or Email Address *"
                    class="mb-3 ps-3 text-input">
                  <input type="password" name="password" placeholder="Password" class="ps-3 text-input">
                  <div class="checkbox d-flex justify-content-between mt-4">
                    <p class="checkbox-form">
                      <label class="">
                        <input name="rememberme" type="checkbox" id="remember-me" value="forever"> Remember me </label>
                    </p>
                    <p class="lost-password">
                      <a href="#">Forgot your password?</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <div class="modal-footer mt-5 d-flex justify-content-center">
              <button type="button" class="btn btn-red hvr-sweep-to-right dark-sweep">Login</button>
              <button type="button"
                class="btn btn-outline-gray hvr-sweep-to-right dark-sweep">Register</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login -->
   {{ $slot }}
   <script src="{{ asset('js/jquery-1.11.0.min.js') }}"></script>
   <script src="{{ asset('js/plugins.js') }}"></script>
   <script src="{{ asset('js/script.js') }}"></script>
 </body>
 
 </html>