<template>
    <section class="home" id="home">
        <!-- <div v-if="userName" class="home-text">
            <span>hh to our</span>
            <h1>Xin chào <br>{{ userName }}</h1>
            <p>Nhà Hàng Vinpearl Thanh Hóa sẵn sàng phục vụ</p>
            <a href="#" class="btn">Xem  Menu</a>
        </div> -->
        <div  class="home-text">
            <span>hh to our</span>
            <h1>Healthy Food <br>Collection!</h1>
            <p>Discover our carefully curated selection of nutritious and delicious meals, made with fresh ingredients
                to nourish your body and delight your taste buds</p>
            <a href="/menu" class="btn">Xem Menu</a>
        </div>
        <div class="home-img">
            <img src="https://i.postimg.cc/gJBk5PMz/salad.png" alt="food image">
        </div>
    </section>
    <sliderComponent/>

    <section class="about" id="about">
        <h1>Today Deal's</h1>

        <div class="about-container">
            <div class="about-box">
                <div class="box-img">
                    <img src="https://i.postimg.cc/TwS5bmvJ/about1.png" alt="about image">
                </div>
                <h3>Chicken and Eggs Salad (Extra Portion)</h3>
                <h2>$ 14.99</h2>
            </div>

            <div class="about-box">
                <div class="box-img">
                    <img src="https://i.postimg.cc/wxw6TJd1/about2.png" alt="about image">
                </div>
                <h3>Chicken and Eggs Salad</h3>
                <h2>$ 9.99</h2>
            </div>

            <div class="about-box">
                <div class="box-img">
                    <img src="https://i.postimg.cc/zXWHL0Dd/about3.png" alt="about image">
                </div>
                <h3>Green Salad with Cheese</h3>
                <h2>$ 7.99</h2>
            </div>

            <div class="about-box">
                <div class="box-img">
                    <img src="https://i.postimg.cc/9QLmz798/about4.png" alt="about image">
                </div>
                <h3>Mixed Colorful Salad</h3>
                <h2>$ 9.99</h2>
            </div>
        </div>
    </section>

    <section class="shop" id="shop">
        <div class="heading">
            <h2>Food Shop</h2>
            <p>Explore our wide selection of fresh, healthy meals prepared daily by our expert chefs using premium
                ingredients. From vibrant salads to nutritious main courses, we have something for every taste</p>
        </div>

        <div class="shop-container">
            <div class="shop-box">
                <div class="shop-img">
                    <img src="https://i.postimg.cc/kXq3PgHT/shop1.jpg" alt="shop image">
                </div>
                <h3><a href="/product-detail">White Sauce Salad with Lentils</a></h3>
                <h2>$ 9.99</h2>
                <i class='bx bxs-cart-add'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="https://i.postimg.cc/SxLGFmwf/shop2.jpg" alt="shop image">
                </div>
                <h3>Green Sauce Salad with Beetroot</h3>
                <h2>$ 7.99</h2>
                <i class='bx bxs-cart-add'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="https://i.postimg.cc/43mqJ7sT/shop3.jpg" alt="shop image">
                </div>
                <h3>Salad Fruit with Condensed Milk</h3>
                <h2>$ 4.99</h2>
                <i class='bx bxs-cart-add'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="https://i.postimg.cc/Y2GF1pqq/shop4.jpg" alt="shop image">
                </div>
                <h3>Rainbow Salad</h3>
                <h2>$ 9.99</h2>
                <i class='bx bxs-cart-add'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="https://i.postimg.cc/fyDhTz8j/shop5.jpg" alt="shop image">
                </div>
                <h3>Green Salad with Lentils</h3>
                <h2>$ 7.99</h2>
                <i class='bx bxs-cart-add'></i>
            </div>

            <div class="shop-box">
                <div class="shop-img">
                    <img src="https://i.postimg.cc/KzQ0BmZ5/shop6.jpg" alt="shop image">
                </div>
                <h3>Salad with Mushroom and Seeds</h3>
                <h2>$ 9.99</h2>
                <i class='bx bxs-cart-add'></i>
            </div>
        </div>
    </section>

    <section class="customer" id="customer">
        <div class="heading">
            <h2>Our Customer's</h2>
            <p>Read what our customers say about their experience with our healthy food collection. We value your
                feedback and strive to provide the best possible service and products</p>
        </div>

        <div class="customer-container">
            <div class="box">
                <img src="https://i.postimg.cc/RhC2HrJ2/c1.jpg" alt="customer image">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star-half'></i>
                </div>
                <p>I've been a loyal customer of Foodie for years, and I can't imagine my life without their delicious,
                    nutritious meals. The variety of options is amazing, and the quality of the ingredients is
                    top-notch. The customer service is outstanding, and the delivery is always on time. I highly
                    recommend Foodie to anyone looking for a healthy and satisfying dining experience!</p>
                <h2>Alissa Doe</h2>
            </div>

            <div class="box">
                <img src="https://i.postimg.cc/L8q51wzq/c2.jpg" alt="customer image">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>As a fitness enthusiast, finding a restaurant that aligns with my dietary goals was challenging until
                    I discovered Foodie. Their salads are not just healthy but absolutely delicious! The portions are
                    generous, and the ingredients are always fresh. What impresses me most is their commitment to
                    quality and consistency. Every meal is a perfect balance of nutrition and flavor.</p>
                <h2>Shawn Rock</h2>
            </div>

            <div class="box">
                <img src="https://i.postimg.cc/dQHJjnQG/c3.jpg" alt="customer image">
                <div class="stars">
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                    <i class='bx bxs-star'></i>
                </div>
                <p>Being a busy professional, Foodie has been a game-changer for my healthy eating habits. Their
                    convenient ordering system and quick delivery make it easy to maintain a nutritious diet despite my
                    packed schedule. The seasonal menu keeps things exciting, and I love how they accommodate dietary
                    preferences. The freshness of their ingredients really sets them apart from other restaurants!</p>
                <h2>Kate Swift</h2>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="heading">
            <h2>Contact us</h2>
            <p>We'd love to hear from you!</p>
        </div>

        <div class="contact-container">
            <div class="contact-info">
                <h2>Get in Touch</h2>
                <p>We're always here to help you with your healthy food needs. Whether you have a question, feedback, or
                    just want to say hello, our team is here to assist you. Please use the form below to get in touch
                    with us, or find us on social media for the latest updates and promotions</p>
                <div class="address">
                    <i class='bx bxs-map'><span>44 Street NYC, USA 10001</span></i>
                    <i class='bx bxs-phone'><span>+1 100 104 40001</span></i>
                    <i class='bx bxs-envelope'><span>contact@foodie.com</span></i>
                </div>

                <div class="social">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>

            <div class="contact-form">
                <form action="">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Write your Message"></textarea>
                    <input type="button" value="Submit" class="btn">
                </form>
            </div>
        </div>
    </section>

    <div class="copyright">
        <p>&#169; 2025 <span>ULTRA CODE</span> All rights reserved</p>
    </div>
</template>
<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Turret+Road:wght@400;500;700;800&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-padding-top: 2rem;
    list-style: none;
    text-decoration: none;
    scroll-behavior: smooth;
    font-family: 'Poppins', sans-serif;
}


:root {
    --main-color: #16B978;
    --second-color: #081B54;
}

section {
    padding: 50px 10%;
}

img {
    width: 100%;
}

*::selection {
    color: #FFF;
    background: var(--main-color);
}

header {
    position: fixed;
    width: 100%;
    top: 0;
    right: 0;
    z-index: 1000;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 15px 10%;
    transition: .2s;
}

header.active {
    background: var(--second-color);
    box-shadow: 0 0 4px rgb(14 55 54 / 15%);
}

header.active .logo,
header.active .navbar a {
    color: #FFF;
}

.logo {
    display: flex;
    align-items: center;
    font-size: 1.1rem;
    font-weight: 600;
    color: #000000;
}

.logo img {
    width: 35px;
    margin-right: 10px;
}

.navbar {
    display: flex;
}

.navbar a {
    font-size: 1rem;
    padding: 10px 20px;
    color: #000000;
    font-weight: 500;
}

.navbar a:hover {
    background: var(--main-color);
    color: #FFF;
    border-radius: 4px;
}

#menu-icon {
    font-size: 24px;
    cursor: pointer;
    z-index: 10000;
    display: none;
}

/* Home Section */
.home {
    width: 100%;
    min-height: 100vh;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    background: url('https://i.postimg.cc/pX41q1RD/Background-1-2x.png') no-repeat center;
    background-size: cover;
    gap: 1rem;
}

.home-text {
    flex: 1 1 17rem;
}

.home-text span {
    font-size: 1rem;
    font-weight: 600;
    text-transform: uppercase;
    color: var(--main-color);
}

.home-text h1 {
    font-size: 4rem;
    color: var(--second-color);
}

.home-text p {
    margin: 0.5rem 0 1.4rem;
}

.home-img {
    flex: 1 1 17rem;
}

.btn {
    padding: 10px 20px;
    border: 2px solid blue;
    border-radius: 40px;
    color: blue;
    font-weight: 500;
    transition: .3s;
}

.btn:hover {
    letter-spacing: 2px;
    color: #FFF;
    background: blue;
}

/* About Section */

.about {
    display: flex;
    align-items: center;
    flex-direction: column;
    background: url('https://i.postimg.cc/vZgq6RgJ/about-bg.jpg') no-repeat center;
    background-size: cover;
}

.about h1 {
    font-size: 2.5rem;
    color: #FFF;
    margin-bottom: 2rem;
    text-transform: uppercase;
}

.about-container {
    background: #FFF;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    border-radius: 10px;
    border-top: 6px solid var(--main-color);
    padding: 20px;
    gap: 2rem;
}

.box-img {
    width: 200px;
    height: 200px;
}

.box-img img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    object-position: center;
}

.about-box {
    flex: 1 1 8rem;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.about-box h2 {
    font-size: 1.2rem;
    color: var(--main-color);
    letter-spacing: 1px;
}

.about-box h3 {
    font-size: 1rem;
    color: var(--second-color);
    font-weight: 500;
    margin: 0 0 0.5rem;
}

/* Shop Section */

.heading {
    text-align: center;
}

.heading h2 {
    font-size: 2rem;
    color: var(--second-color);
    margin-bottom: 0.5rem;
}

.shop-container,
.customer-container {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-wrap: wrap;
    gap: 1rem;
    margin-top: 2rem;
}

.shop-box {
    position: relative;
    flex: 1 1 17rem;
    box-shadow: 0 4px 4px rgb(14 55 54 / 15%);
    border-radius: .5rem;
    height: auto;
}

.shop-box h2 {
    font-size: 1.2rem;
    color: var(--main-color);
    letter-spacing: 1px;
    padding: 10px;
    text-align: center;
}

.shop-box h3 {
    font-size: 1rem;
    font-weight: 500;
    color: var(--second-color);
    padding: 10px;
    text-align: center;
}

.shop-box .bxs-cart-add {
    position: absolute;
    right: 0;
    bottom: 0;
    font-size: 20px;
    background-color: var(--main-color);
    border-radius: 4px 0 0 4px;
    color: #FFF;
    padding: 10px;
    transition: .3s;
    cursor: pointer;
}

.shop-box .bxs-cart-add:hover {
    background: var(--second-color);
}

.shop-img {
    width: 100%;
    height: 300px;
    border-radius: .5rem;
    overflow: hidden;
}

.shop-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.shop-img img:hover {
    transform: scale(1.1);
    transition: .5s;
}

/* Customer Section */

.customer-container .box {
    flex: 1 1 16rem;
    text-align: center;
    box-shadow: 0 4px 4px rgb(14 55 54 / 15%);
    padding: 20px;
    border-radius: .5rem;
}

.box img {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid var(--second-color);
}

.box .bx {
    color: var(--main-color);
    margin-top: 0.5rem;
}

.box p {
    margin: 0.5rem 0 1rem;
}

.box h2 {
    font-size: 1.2rem;
    color: var(--main-color);
    letter-spacing: 1px;
}

/* Contact Section */

.contact-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}

.contact-info {
    flex: 1 1 20rem;
}

.contact-info h2 {
    font-size: 1.7rem;
    color: var(--second-color);
}

.contact-info p {
    margin: 0.5rem 0 1rem;
    text-align: justify;
}

.contact-form {
    flex: 1 1 20rem;
    display: flex;
    justify-content: center;
}

.contact-form form {
    display: flex;
    flex-direction: column;
    width: 100%;
}

form input,
textarea {
    width: 100%;
    padding: 17px;
    border-radius: .5rem;
    outline: none;
    margin-bottom: 1rem;
    border: 2px solid var(--main-color);
    box-shadow: 0 4px 4px 2px rgb(14 55 54 / 15%);
}

form input::placeholder,
textarea::placeholder {
    color: var(--main-color);
}

form textarea {
    height: 150px;
    resize: none;
}

form .btn {
    max-width: 150px;
    background: blue;
    color: #FFF;
    text-transform: uppercase;
    font-weight: bold;
    border: none;
    transition: .3s;
    margin: auto;
    cursor: pointer;
}

form .btn:hover {
    background: gray;
}

.address {
    display: flex;
    flex-direction: column;
}

.address i {
    display: flex;
    align-items: center;
    margin-bottom: 0.5rem;
    font-size: 20px;
}

.address span {
    font-size: 1rem;
    margin-left: 1rem;
}

.social {
    margin-top: 1rem;
}

.social a {
    font-size: 24px;
    color: var(--main-color);
    margin-right: 1rem;
    transition: .3s;
}

.social a:hover {
    color: var(--second-color);
}

.copyright {
    text-align: center;
    padding: 20px;
}

.copyright span {
    font-family: 'Turret Road', sans-serif;
    font-weight: 600;
}

@media (max-width: 1100px) {
    .home-text h1 {
        font-size: 3rem;
    }
}

@media (max-width: 991px) {
    header {
        padding: 18px 4%;
    }

    header .navbar {
        position: absolute;
        top: -500px;
        left: 0;
        right: 0;
        display: flex;
        flex-direction: column;
        background: var(--second-color);
        box-shadow: 0 4px 4px rgb(14 55 54 / 15%);
        transition: .2s ease;
        text-align: center;
    }

    .navbar a {
        padding: 1.5rem;
        display: block;
        color: #FFF;
    }

    .navbar.active {
        top: 100%;
    }

    section {
        padding: 50px 4%;
    }

    #menu-icon {
        display: initial;
    }

    header.active #menu-icon {
        color: #FFF;
    }

    .home-text h1 {
        font-size: 2.4rem;
    }

    .home-text p {
        font-size: .9rem;
    }

    .about h1 {
        font-size: 2rem;
    }

    .heading h2 {
        font-size: 1.6rem;
    }

    .contact-info h2 {
        font-size: 1.6rem;
    }

}
</style>
<script setup>
import { ref, onMounted, onUnmounted } from 'vue';
import sliderComponent from './sliderComponent.vue';
const headerRef = ref(null);
const navbarRef = ref(null);
const navbarActive = ref(false);

const toggleMenu = () => {
    navbarActive.value = !navbarActive.value;
};

const handleScroll = () => {
    if (headerRef.value) {
        console.log("scrollY:", window.scrollY);
        headerRef.value.classList.toggle('active', window.scrollY > 0);
    }
};


onMounted(() => {
    window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
    window.removeEventListener('scroll', handleScroll);
});
</script>
<script>
// export default {
//     data() {
//         return {
//             userName: null, // Biến để lưu tên người dùng
//         };
//     },
//     created() {
//         this.userName = window.userSession.name;
//     }
// };
</script>
