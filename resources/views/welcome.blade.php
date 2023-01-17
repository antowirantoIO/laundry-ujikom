<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;900&display=swap"
        rel="stylesheet">
    <link href="https://laracasts.com/css/app.css?id=a9f7711219c4a63eb2152246d474daad" rel="stylesheet">
</head>

<body class="leading-normal">
    <div class="page page-dark font-sans">
        <div class="xl:flex-1">
            <div class="header-wrap relative">
                <nav class="section new-nav z-50 w-full max-w-none py-4 lg:py-3" style="height: 60px;">
                    <div class="relative flex h-full items-center justify-between">
                        <div id="header-logo-arrow" class="mr-4 flex lg:mr-8 xl:mr-0 xl:w-1/4 has-animation"><a
                                aria-label="Laracasts"
                                class="relative inline-block cursor-pointer leading-none text-bold text-white text-xl tracking-tight"
                                href="/">E-Laundry</a></div>
                        <div class="relative hidden md:block xl:w-1/4">
                            <div class="flex items-center justify-end">
                                <div
                                    class="btn flex-center btn-blue ml-6 flex-shrink-0 px-3 py-2 hidden lg:inline-block">
                                    <!---->
                                    <!---->
                                    <!----><a href="/login" class="text-wrap inline-block flex-shrink-0"> Masuk
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
            <div class="footer-wrap mobile:text-lg" style="height: 100vh">
                <section class="footer-section top pt-0 lg:pb-0">
                    <div class="container">
                        <div class="mx-auto text-center md:w-4/5 lg:w-1/2">
                            <div>
                                <h2 class="mb-8 text-2xl tracking-tight text-white md:text-3xl"> Lacak Status Laundry
                                    Kamu Disini
                                </h2>
                            </div>
                            <div>
                                <form id="newsletter-form" method="POST" action="/newsletters/subscribe">
                                    <div
                                        class="mx-auto mb-6 flex max-w-sm flex-col justify-center md:flex-row lg:mx-0 lg:mb-0 lg:max-w-full">
                                        <input
                                            class="mb-4 rounded-xl px-4 py-4 text-center text-base text-black placeholder-grey-800 md:mr-3 md:mb-0 md:w-1/2 md:py-3 md:text-left md:text-sm"
                                            type="email" name="email" placeholder="Masukan Nomor Invoice Anda"
                                            autocomplete="off" required="">
                                        <button class="btn flex-center btn-blue py-5 md:w-32 md:py-4" type="submit">
                                            <!---->
                                            <!---->
                                            <!----><span class="text-wrap inline-block flex-shrink-0">Cari</span>
                                        </button>
                                    </div>
                                    <!---->
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="footer-section bottom py-0 text-center lg:text-left">
                    <footer class="container">
                        <div class="lg:mb-3 lg:flex">
                            <div class="mb-10 lg:mr-auto lg:mb-0 lg:w-2/5">
                                <div class="mb-3 flex justify-center lg:block text-3xl">
                                    E-Laundry
                                </div>
                                <div
                                    class="mx-auto mb-8 flex w-42 items-center justify-between gap-x-2 lg:mx-0 lg:w-28">
                                    <a href="https://www.youtube.com/laracastsofficial"
                                        aria-label="Laracasts on Youtube" target="_blank" rel="noreferrer"
                                        class="flex-center h-12 w-12 flex-shrink-0 rounded-md bg-blue/10 hover:bg-blue/15">
                                        <svg viewBox="0 0 16 19" class="w-8 text-grey-600 transition-all">
                                            <g class="fill-current" fill-rule="nonzero">
                                                <path
                                                    d="M6.4 0H5.371l-.685 2.629L4 0H2.857c.229.686.457 1.257.686 1.943.343.914.571 1.714.571 2.171v2.743h1.029V4.114L6.4 0zm2.743 5.143V3.429c0-.572-.114-.915-.343-1.258-.229-.342-.571-.457-1.029-.457-.457 0-.8.229-1.028.572-.229.228-.343.571-.343 1.143v1.828c0 .572.114.914.343 1.143.228.343.571.457 1.028.457.458 0 .8-.228 1.029-.571.229-.115.343-.572.343-1.143zm-.914.228c0 .458-.115.686-.458.686-.342 0-.457-.228-.457-.686V3.2c0-.457.115-.686.457-.686.343 0 .458.229.458.686v2.171zm4.342 1.486V1.714h-.914V5.6c-.228.343-.343.457-.571.457a.246.246 0 0 1-.229-.228V1.714h-.914v4c0 .343 0 .572.114.8 0 .229.229.343.572.343.342 0 .685-.228 1.028-.571v.571h.914zM13.029 12c-.343 0-.458.229-.458.686v.457h.915v-.457c0-.457-.115-.686-.457-.686zM9.714 12c-.114 0-.343.114-.457.229v3.085c.114.115.343.229.457.229.229 0 .343-.229.343-.686v-2.171c0-.457-.114-.686-.343-.686z">
                                                </path>
                                                <path
                                                    d="M15.314 9.486C15.086 8.686 14.4 8 13.714 8 11.886 7.771 9.943 7.771 8 7.771c-1.943 0-3.771 0-5.714.229-.686 0-1.372.686-1.6 1.486-.229 1.143-.229 2.4-.229 3.543 0 1.142 0 2.4.229 3.542.228.8.8 1.372 1.6 1.486 1.943.229 3.771.229 5.714.229 1.943 0 3.771 0 5.714-.229.8-.114 1.486-.686 1.6-1.486.229-1.142.229-2.4.229-3.542 0-1.143 0-2.4-.229-3.543zM4.8 10.514H3.657v5.829H2.63v-5.829H1.6V9.486h3.2v1.028zm2.743 5.829h-.914v-.572c-.343.458-.686.572-1.029.572-.343 0-.457-.114-.571-.343 0-.114-.115-.343-.115-.8v-4h.915v4c0 .114.114.229.228.229.229 0 .343-.115.572-.458V11.2h.914v5.143zm3.428-1.6c0 .457 0 .8-.114 1.028-.114.343-.343.572-.686.572-.342 0-.685-.229-.914-.572v.458h-.914V9.486h.914v2.171c.343-.343.572-.571.914-.571.343 0 .572.228.686.571.114.229.114.572.114 1.029v2.057zm3.429-.8h-1.829v.914c0 .457.115.686.458.686.228 0 .342-.114.457-.343v-.571h.914V15.314c0 .229-.114.343-.229.572-.228.343-.571.571-1.142.571-.458 0-.8-.228-1.143-.571-.229-.229-.343-.686-.343-1.143v-1.714c0-.572.114-.915.228-1.143.229-.343.572-.572 1.143-.572.457 0 .8.229 1.029.572.228.228.228.685.228 1.143v.914h.229z">
                                                </path>
                                            </g>
                                        </svg>
                                    </a>
                                    <a href="https://twitter.com/laracasts" aria-label="Laracasts on Twitter"
                                        target="_blank" rel="noreferrer"
                                        class="flex-center h-12 w-12 flex-shrink-0 rounded-md bg-blue/10 hover:bg-blue/15">
                                        <svg class="w-8 text-grey-600 transition-all" viewBox="0 0 18 18">
                                            <path class="fill-current" fill-rule="nonzero"
                                                d="M9 0C4.037 0 0 4.037 0 9c0 4.962 4.037 9 9 9 4.962 0 9-4.038 9-9 0-4.963-4.037-9-9-9zm4.015 6.94c.004.09.006.18.006.27 0 2.737-2.083 5.892-5.894 5.892a5.86 5.86 0 0 1-3.175-.93 4.158 4.158 0 0 0 3.067-.858 2.074 2.074 0 0 1-1.936-1.439 2.088 2.088 0 0 0 .936-.034 2.072 2.072 0 0 1-1.662-2.032v-.026c.28.155.6.249.938.26a2.07 2.07 0 0 1-.64-2.766 5.882 5.882 0 0 0 4.269 2.165 2.071 2.071 0 0 1 3.53-1.89 4.135 4.135 0 0 0 1.316-.503 2.08 2.08 0 0 1-.912 1.146c.419-.05.82-.16 1.19-.326-.277.415-.628.78-1.033 1.071z">
                                            </path>
                                        </svg>
                                    </a>
                                    <a href="https://github.com/laracasts" aria-label="Laracasts on GitHub"
                                        target="_blank" rel="noreferrer"
                                        class="flex-center h-12 w-12 flex-shrink-0 rounded-md bg-blue/10 hover:bg-blue/15">
                                        <svg viewBox="0 0 30 29" class="w-8 text-grey-600 transition-all">
                                            <path class="fill-current" fill-rule="nonzero"
                                                d="M27.959 7.434a14.866 14.866 0 0 0-5.453-5.414C20.21.69 17.703.025 14.984.025c-2.718 0-5.226.665-7.521 1.995A14.864 14.864 0 0 0 2.01 7.434C.67 9.714 0 12.202 0 14.901c0 3.242.953 6.156 2.858 8.746 1.906 2.589 4.367 4.38 7.385 5.375.351.064.611.019.78-.136a.755.755 0 0 0 .254-.58l-.01-1.047c-.007-.658-.01-1.233-.01-1.723l-.448.077a5.765 5.765 0 0 1-1.083.068 8.308 8.308 0 0 1-1.356-.136 3.04 3.04 0 0 1-1.308-.58c-.403-.304-.689-.701-.858-1.192l-.195-.445a4.834 4.834 0 0 0-.614-.988c-.28-.362-.563-.607-.85-.736l-.136-.097a1.428 1.428 0 0 1-.253-.233 1.062 1.062 0 0 1-.176-.271c-.039-.09-.007-.165.098-.223.104-.059.292-.087.566-.087l.39.058c.26.052.582.206.965.465.384.258.7.594.947 1.007.299.53.66.933 1.082 1.21.423.278.85.417 1.278.417.43 0 .8-.032 1.112-.097a3.9 3.9 0 0 0 .878-.29c.117-.866.436-1.53.956-1.996a13.447 13.447 0 0 1-2-.348 7.995 7.995 0 0 1-1.833-.756 5.244 5.244 0 0 1-1.571-1.298c-.416-.516-.758-1.195-1.024-2.034-.267-.84-.4-1.808-.4-2.905 0-1.563.514-2.893 1.541-3.99-.481-1.176-.436-2.493.137-3.952.377-.116.936-.03 1.678.261.741.291 1.284.54 1.629.746.345.207.621.381.83.523a13.948 13.948 0 0 1 3.745-.503c1.288 0 2.537.168 3.747.503l.741-.464c.507-.31 1.106-.595 1.795-.853.69-.258 1.216-.33 1.58-.213.586 1.46.638 2.777.156 3.951 1.028 1.098 1.542 2.428 1.542 3.99 0 1.099-.134 2.07-.4 2.916-.267.846-.611 1.524-1.034 2.034-.423.51-.95.94-1.58 1.288a8.01 8.01 0 0 1-1.834.756c-.592.155-1.259.271-2 .349.676.58 1.014 1.498 1.014 2.75v4.087c0 .232.081.426.244.58.163.155.42.2.77.136 3.019-.994 5.48-2.786 7.386-5.375 1.905-2.59 2.858-5.504 2.858-8.746 0-2.698-.671-5.187-2.01-7.466z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
