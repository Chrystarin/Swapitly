@extends('layouts.app')
@section('content')
    <div id="RequestForm-holder">
        <h1>Trade Request</h1>
        <div id="RequestForm-ReciepientInformation-holder">

            <div id="RequestForm-ReciepientInformation">
                <div id="RequestForm-RecipientImage-Holder">
                    <img id="RequestForm-ReciepientPicture-Recipient" class="UserPicture CopyDisable" src="/storage/profile_images/default_profile.jpg" alt="">
                </div>
                <div id="RequestForm-RecipientBasicInformation-Holder">
                    <div>
                        <h2 id="RequestForm-Name-Recipient">Harold James H. Castillo</h2>
                        <div id="RequestForm-Rating-Recipient-holder">
                            <img src="" alt="xxx"> <span id="RequestForm-Rating-Recipient"> 5.0</span>
                        </div>
                        <a target="_blank" href="https://www.google.com.ph/maps/place/San+Mateo,+Rizal/@14.674497,121.1124831,12.75z/data=!4m5!3m4!1s0x3397bbd0422404fb:0xf369cca31a8be513!8m2!3d14.6958933!4d121.1216992"><p id="RequestForm-Location-Recipient">San Mateo</p></a>
                    </div>
                </div>
                <div id="RequestForm-RecipientChat-Holder">
                    <a href="#">
                        <img src="/Storage/images/png/Message.png" alt="">
                    </a>
                </div>
                <div id="RequestForm-RecipientUsername-Holder">
                    <h2>iMcfury</h2>
                </div>
                <div id="RequestForm-RecipientAchievement-Holder">
                    <img src="/Storage/images/png/Verified.png" alt="">
                </div>
            </div>

            <div id="RequestForm-ReciepientItem-Remarks-holder">
                <h3>Remarks :</h3>
                <p id="RequestForm-ReciepientItem-Remarks"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nesciunt repudiandae architecto obcaecati officia vel laborum, iste quibusdam magni non blanditiis minus numquam accusantium veniam eveniet aspernatur ut porro ipsam placeat?</p>
            </div>
        </div>

        <div id="RequestForm-ReciepientItemInformation-holder">
            <div id="RequestForm-ItemPreview">
                <div id="RequestForm-ItemPreview-ItemPreview-Image">
                    <img class="CopyDisable" src="/Storage/item_images/Oppo-Realme-6-Pro-image-4-800x800_1588754696.jpg" alt="">
                </div>
                <div id="RequestForm-ItemPreview-ItemPreview-Content">
                    <h2>Realme 6 2020</h2>
                    <p>Quality : <span>Used</span></p>
                    <p>Quantity(<span>3</span> pcs): <span>Used</span></p>
                    <p>Category : <span>Phone</span></p>
                    <p>Description : </p>
                    <p><span>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Illo, quas sunt assumenda ducimus beatae minus possimus. Debitis error asperiores eum, voluptates repudiandae ex quasi ipsam enim temporibus mollitia possimus dolore!</span></p>
                </div>
            </div>
            <div class="RequestFormInfo-holder" id="RequestForm-ItemDesiredItem-holder">
                <h3>Desired Item :</h3>
                <div>
                    <a href="#" class="Categ">I</a>
                    <a href="#" class="Categ">Love</a>
                    <a href="#" class="Categ">You</a>
                    <a href="#" class="Categ">my</a>
                    <a href="#" class="Categ">beautiful</a>
                    <a href="#" class="Categ">wife</a>
                </div>
            </div>
            <div class="RequestFormInfo-holder" id="RequestForm-ItemDetailedDescription-holder">
                <h3>Detailed Description :</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Reiciendis quas expedita repellat aut, eveniet necessitatibus assumenda autem. Facilis fuga veniam molestiae molestias voluptatem dignissimos, praesentium natus nisi laudantium, tempore quos!</p>
            </div>
            <div class="RequestFormInfo-holder" id="">
                <h3>Reason of Trading :</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo itaque aspernatur veniam illo! Necessitatibus qui vitae dolor inventore omnis suscipit delectus illo. Dolor, autem molestiae! Suscipit numquam magnam architecto optio.</p>
            </div>
        </div>
        
        <div></div>
        <div></div>
        <div></div>
    </div>
@endsection