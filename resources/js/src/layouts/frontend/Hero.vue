<template>
    <div class="hero">
        <!-- desktop -->
        <div class="d-none d-md-block">
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="d-flex h-100">
                        <div class="justify-content-center align-self-center">
                            <h1>
                                <strong>Tidak perlu berpuisi,</strong><br>
                                nikmati dengan caramu sendiri.
                            </h1>
                            <router-link to="/menu" class="btn btn-lg btn-dark">
                                <b-icon-arrow-right></b-icon-arrow-right> ORDER
                            </router-link>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="" alt="image" width="100%">
                </div>
            </div>
        </div>

        <!-- mobile -->
        <div class="d-sm-block d-md-none">
            <div class="row mt-4">
                <div class="col-md-6 mb-3">
                    <img src="" alt="image" width="100%">
                </div>
                <div class="col-md-6">
                    <div class="d-flex h-100">
                        <div class="justify-content-center align-self-center">
                            <h1>
                                <strong>Tidak perlu berpuisi,</strong><br>
                                nikmati dengan caramu sendiri.
                            </h1>
                            <router-link to="/menu" class="btn btn-lg btn-dark">
                                <b-icon-arrow-right></b-icon-arrow-right> ORDER
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name : "Hero"
}
</script>

<style>

</style>