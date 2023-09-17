<div class="container">
        <h4 style="color:#2E86C1">Contact Us</h4>
        <address>
            <h6><i class="bi bi-airplane-engines-fill"></i> Dream Travel Agency</h6>
            Ms.Aanand Varma(MD)<br>
            Kochi,Kerala<br>
            <i class="bi bi-telephone"></i> +91-6538381091<br>
            <i class="bi bi-envelope"></i> dreamtravelagency@gmail.com

        </address>
    </div>

    <div class="container" style="background-image: linear-gradient(to right, #190A3E , #391399,#BCB1D6);">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Your Query</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
        </div>
        <div class="mb-3">
            <button type="button" class="btn btn-primary" id="liveToastBtn">Send</button>

                <div class="toast-container position-fixed bottom-0 end-0 p-3">
                    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header">
                            <img src="httpdocs/images/premium.jpg" class="rounded me-2" alt="icon" height="100px">
                            <strong class="me-auto">Dream Travel Agency</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                        </div>
                        <div class="toast-body">
                            Your query successfully submitted
                        </div>
                </div>
            </div>
    </div>
   
    <script>
        const toastTrigger = document.getElementById('liveToastBtn')
        const toastLiveExample = document.getElementById('liveToast')

        if (toastTrigger) {
        const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
        toastTrigger.addEventListener('click', () => {
            toastBootstrap.show()
        })
        }
    </script>