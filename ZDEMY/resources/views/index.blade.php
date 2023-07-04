@extends('layout')



@section('content')

    <header class="about__header">
        <div class="container header_container">
            <div class="header__left">
                <h1>Grow your skills to advance your career path</h1>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia, quo ex suscipit dolores saepe vitae aut dolore fugiat quod nulla.
                </p>
                <a href="/home/courses" class="btn btn-primary">Get started</a>
            </div>

            <div class="header__right">
                <div class="header__right-image">
                    <img src="{{asset('images/header.svg')}}">
                </div>
            </div>
        </div>
    </header>


    <!-- ----------------------END OF HEADER-------------------- -->

<section class="categories">
    <div class="container categories__container">
        <div class="categories__left">
            <h1>Categories</h1>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, ducimus! Vitae porro exercitationem dolorum, nihil atque at, repellendus temporibus dolorem suscipit itaque sapiente officiis quam laborum! Sit nihil pariatur harum.
            </p>
            <a href="/home/about/blog" class="btn">Learn more</a>
        </div>

        <div class="categories__right">

            <article class="category">
                <span class="category__icon">
                    <i class="fa-brands fa-bitcoin"></i>
                </span>
                <h5>Blockchain</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, amet.</p>
            </article>

            <article class="category">
                <span class="category__icon">
                    <i class="fa-sharp fa-solid fa-palette"></i>
                </span>
                <h5>Graphic Design</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, amet.</p>
            </article>

            <article class="category">
                <span class="category__icon">
                    <i class="fa-solid fa-bullhorn"></i>
                 </span>
                <h5>Marketing</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, amet.</p>
            </article>

            <article class="category">
                <span class="category__icon">
                    <i class="fa-solid fa-dollar-sign"></i>
                </span>
                <h5>Finance</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, amet.</p>
            </article>

            <article class="category">
                <span class="category__icon">
                    <i class="fa-solid fa-music"></i>
                </span>
                <h5>Music</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, amet.</p>
            </article>

            <article class="category">
                <span class="category__icon">
                    <i class="fa-solid fa-puzzle-piece"></i>
                </span>
                <h5>Business</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit, amet.</p>
            </article>

        </div>
    </div>
</section>

<!-- ----------------------END OF CATEGORIES-------------------- -->

<section class="courses">
    <h2>Popular Courses</h2>
    <div class="container courses__container">
        <article class="course">
            <div class="course__image">
                <img src="{{asset('images/course1.jpg')}}">
            </div>
        <div class="course__info">
            <h4>Responsive social media website UI design</h4>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam soluta dignissimos tempore sunt autem quisquam aliquid.
            </p>
            <a href="/home/courses" class="btn btn-primary">Learn more</a>
        </div>
        </article>

        <article class="course">
            <div class="course__image">
                <img src="{{asset('images/course2.jpg')}}">
            </div>
            <div class="course__info">
                <h4>Responsive smart home website UI design</h4>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam soluta dignissimos tempore sunt autem quisquam aliquid.
            </p>
            <a href="/home/courses" class="btn btn-primary">Learn more</a>
            </div>

        </article>

        <article class="course">
            <div class="course__image">
                <img src="{{asset('images/course3.jpg')}}">
            </div>
          <div class="course__info">
            <h4>Responsive admin dashboard website UI design</h4>
            <p>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam soluta dignissimos tempore sunt autem quisquam aliquid.
            </p>
            <a href="/home/courses" class="btn btn-primary">Learn more</a>
          </div>
        </article>

    </div>
</section>

<!-- ----------------------END OF COURSES-------------------- -->


<section class="faqs">
    <h2>Frequently Asked Questions</h2>
    <div class="container faqs__container">
        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>

        <article class="faq">
            <div class="faq__icon"><i class="fa-solid fa-plus"></i></div>
            <div class="question__answer">
                <h4>How do I know the right courses for me?</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eveniet beatae reprehenderit inventore ut maiores vitae iste perspiciatis provident officia, iure minima! Vel cum mollitia facere iste labore numquam beatae porro!
                </p>
            </div>
        </article>
    </div>
</section>

<!-- ----------------------END OF FAQ-------------------- -->


<section class="container testimonials__container mySwiper">
    <h2>Students' Testimonials</h2>
    <div class="swiper-wrapper">
        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="{{asset('images/avatar1.jpg')}}">
            </div>
            <div class="testimonial__info">
                <h5>Diana Ayi</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, obcaecati repellat neque culpa, beatae repellendus inventore recusandae, voluptas labore libero odio aut cumque consequuntur quo alias? Voluptas nam quidem earum!

                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="{{asset('images/avatar2.jpg')}}">
            </div>
            <div class="testimonial__info">
                <h5>Ernest Achiever</h5>
                <small>Web Developer</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, obcaecati repellat neque culpa, beatae repellendus inventore recusandae, voluptas labore libero odio aut cumque consequuntur quo alias? Voluptas nam quidem earum!

                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="{{asset('images/avatar3.jpg')}}">
            </div>
            <div class="testimonial__info">
                <h5>Edem Quist</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, obcaecati repellat neque culpa, beatae repellendus inventore recusandae, voluptas labore libero odio aut cumque consequuntur quo alias? Voluptas nam quidem earum!

                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="{{asset('images/avatar4.jpg')}}">
            </div>
            <div class="testimonial__info">
                <h5>Hajia Bintu</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, obcaecati repellat neque culpa, beatae repellendus inventore recusandae, voluptas labore libero odio aut cumque consequuntur quo alias? Voluptas nam quidem earum!

                </p>
            </div>
        </article>

        <article class="testimonial swiper-slide">
            <div class="avatar">
                <img src="{{asset('images/avatar5.jpg')}}">
            </div>
            <div class="testimonial__info">
                <h5>Jane Doe</h5>
                <small>Student</small>
            </div>
            <div class="testimonial__body">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquam, obcaecati repellat neque culpa, beatae repellendus inventore recusandae, voluptas labore libero odio aut cumque consequuntur quo alias? Voluptas nam quidem earum!

                </p>
            </div>
        </article>
    </div>
    <div class="swiper-pagination"></div>             <!--for the paginaton-->
</section>


<!-- ----------------------END OF TESTIMONIALS-------------------- -->

@endsection
