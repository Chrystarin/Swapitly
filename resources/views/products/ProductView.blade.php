@extends('layouts.app')

@section('content')
    <div id="ProductPreview_Holder">
        <form id="ProductPreview_Information" action="post">
            <div id="ProductPreview_Information_Image">
                <div id="ProductPreview_Information_Image_Holder">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                        <div class="swiper-slide">Slide 1</div>
                        <div class="swiper-slide">Slide 2</div>
                        
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                        <!-- Add Navigation -->
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.8/js/swiper.min.js"></script>
                    <script src="js/Plugins/Swiper/SwiperScript.js"></script>
                </div>
            </div>
            <div id="ProductPreview_Information_Description">
                <div>
                    <h2 id="ProductName">Iphone</h2>
                    <div id="ProductQuality_div" class="ProductContent_Div">
                        <h4 class="ProductDesc">Quality:</h4>
                        <div class="ProductDesc_Value">
                            <p >Used</p>
                        </div>
                    </div>
                    <div id="ProductQuantity_div" class="ProductContent_Div">
                        <h4 class="ProductDesc">Quantity(<span id="ProductQuantity">10</span>):</h4>
                        <div id="ProductQuantity_div_NumPicker" class="ProductDesc_Value">
                            <div class="CopyDisable">-</div>
                            <input type="text" placeholder="1">
                            <div class="CopyDisable">+</div>
                        </div>
                    </div>
                    <div id="ProductCategory_div" class="ProductContent_Div">
                        <h4 class="ProductDesc">Category:</h4>
                        <div class="ProductDesc_Value">
                            <a href="#" class="Categ">phone</a>
                            <a href="#" class="Categ">phone</a>
                            <a href="#" class="Categ">phone</a>
                            <a href="#" class="Categ">phone</a>
                            <a href="#" class="Categ">phone</a>
                            <a href="#" class="Categ">phone</a>
                            <a href="#" class="Categ">phone</a>
                        </div>
                        <span></span>
                    </div>
                    <div id="ProductDescription_div" class="ProductContent_Div">
                        <h4 class="ProductDesc">Description:</h4>
                        <div id="ProductDescription" >Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore distinctio ut possimus asperiores. Quidem voluptates commodi quos doloribus beatae error rerum earum repellendus pariatur molestiae quas culpa suscipit nesciunt facilis, officia ipsam architecto sit consequatur natus deleniti blanditiis deserunt maxime! Eos in, reiciendis cupiditate a tempore neque inventore asperiores soluta debitis praesentium atque ipsam dolor nulla architecto eum voluptas ea impedit corporis, quibusdam voluptatum deserunt, consectetur ipsum? Voluptatum, totam? Sit voluptatum autem tempore rerum laudantium nobis quidem quas doloremque exercitationem illum minus architecto aut explicabo ipsum, molestiae in ipsa ullam nihil totam laboriosam recusandae ut nulla expedita nostrum. Fuga, nobis.</div>
                    </div>

                </div>
                <div id="ProductsButton">
                    <button><img src="/storage/images/png/Heart.png" alt=""></button>
                    <button>Trade now</button>
                </div>
                <p id="Product_DatePost">Date: <span>20/30/12</span></p>
            </div>
            <div id="ProductPreview_Information_ModeOfTrading">
                <h3>Mode of Trading</h3>					
                <div id="Modeofchoice">
                    <label>
                        <input type="checkbox">
                        <span>Pick up</span>
                        <ul>
                            <li class="Location">
                                <img src="/storage/images/png/Location.png" alt="x">
                                <p>San Mateo Plaza</p>
                            </li>
                            <li class="Date">
                                <img src="/storage/images/png/Heart.png" alt="x">
                                <p><span>June 1, 2019</span> - <span>July 1,2019</span></p>
                            </li>
                            <li class="Note_description">
                                The time I can be there would be around 10:00 Am to 12 only.
                            </li>
                        </ul>
                    </label>
                    <label>
                        <input type="checkbox" disabled>
                        <span>Deliver</span>
                        <ul>
                            <li class="disable">Trader Can't do this option</li>
                            <li class="Location">
                                <img src="/storage/images/png/Location.png" alt="x">
                                <p>San Mateo Plaza</p>
                            </li>
                            <li class="Date">
                                <img src="/storage/images/png/Heart.png" alt="x">
                                <p><span>June 1, 2019</span> - <span>July 1,2019</span></p>
                            </li>
                            <li class="Note_description">
                                The time I can be there would be around 10:00 Am to 12 only.
                            </li>
                        </ul>
                    </label>
                    <label>
                        <input type="checkbox" disabled>
                        <span>Meet up</span>
                        <ul>
                            <li class="disable">Trader Can't do this option</li>
                            <li class="Location">
                                <img src="/storage/images/png/Location.png" alt="x">
                                <p>San Mateo Plaza</p>
                            </li>
                            <li class="Date">
                                <img src="/storage/images/png/Heart.png" alt="x">
                                <p><span>June 1, 2019</span> - <span>July 1,2019</span></p>
                            </li>
                            <li class="Note_description">
                                The time I can be there would be around 10:00 Am to 12 only.
                            </li>
                        </ul>
                    </label>
                </div>	
                <div id="User_Profile">
                    <div id="User_Profile_Details">
                        <div>
                            <a href="image/sample.jpeg">
                                <img src="/storage/images/png/Heart.png" alt="UserImage">	
                            </a>				
                        </div>
                        <div>
                            <a href="#">
                                <h3>MyBeautifulWife</h3>
                                <p>Dianne Chrystalin Brandez</p>
                                <div>
                                    <img src="/storage/images/png/Artboard – 10.png" alt="">
                                    <img src="/storage/images/png/Artboard – 10.png" alt="">
                                    <img src="/storage/images/png/Artboard – 10.png" alt="">
                                    <img src="/storage/images/png/Artboard – 10.png" alt="">
                                    <img src="/storage/images/png/Artboard – 10.png" alt="">
                                    <span>5.0</span>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a href="#"><img src="/storage/images/png/Message.png" alt="Chat"></a>
                        </div>
                    </div>
                    <div id="User_Profile_UserAchivement">
                        <div id="User_Profile_UserAchivement_Verified">
                            <img src="/storage/images/png/ProdView_Verified.png" alt="V">
                        </div>
                    </div>
                    <div id="User_Profile_UserContact">
                        <p>Contact Number</p>
                        <p>Email</p>
                        <p id="User_Profile_UserContact-ContactNumber">09062029419</p>
                        <p id="User_Profile_UserContact-Email">Moshie@myHeart.com</p>
                    </div>
                </div>
                <div id="TotalFrames">
                    <h3>Total Frames</h3>
                    <div>
                        <h4>Total</h4>
                        <h4>Success</h4>
                        <h4>Denied</h4>
                        <h2 id="TotalFrames-Total">10</h2>
                        <h2 id="TotalFrames-Success">6</h2>
                        <h2 id="TotalFrames-Denied">4</h2>
                    </div>
                </div>
            </div>
        </form>
        <div id="ProductDesiredItem_Holder">
            <h3>Desired Item:</h3>
            <div>
                <a href="#" class="Categ">My wife</a>
                <a href="#" class="Categ">My life</a>
                <a href="#" class="Categ">My moshie</a>
                <a href="#" class="Categ">My everything</a>
            </div>
        </div>
        <div id="Productdescription_Holder">
            <h3>Product Description: </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequuntur corporis libero et dolorum, dolorem dolores fugit iste similique amet! Et velit a nihil nesciunt, ducimus provident consequatur reiciendis repellat quasi, minus, veniam delectus explicabo voluptatem illo nisi enim voluptas vel excepturi repellendus alias! Neque vitae error veritatis repellat incidunt.</p>
        </div>
        <div id="Productdescription_Holder">
            <h3>Reason of Trading: </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt consequuntur corporis libero et dolorum, dolorem dolores fugit iste similique amet! Et velit a nihil nesciunt, ducimus provident consequatur reiciendis repellat quasi, minus, veniam delectus explicabo voluptatem illo nisi enim voluptas vel excepturi repellendus alias! Neque vitae error veritatis repellat incidunt.</p>
        </div>
    </div>
    <div>
        qeq
    </div>	
@endsection