@extends('layouts.app')

@section('title', 'Personal')

@section('content')
    <div class="d-flex justify-content-center p-4">
        <div class="col-lg-9 shadow rounded-3">
            <div class="row p-4 pt-5">
                <div class="d-lg-flex justify-content-between">
                    <i class="fa fa-arrow-left text-primary" aria-hidden="true"></i>
                </div>
            </div>
            <div class="row p-4 pt-0">
                <div class="col-lg-12">
                    <div class="tile">
                        <h2 class="tile-title d-lg-flex justify-content-center h2"><b>Your Dependents and Qualifying
                                Children</b></h2>
                        <div class="tile-body">
                            <div class="row ps-5">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-9">
                                    <div class="py-4 h6">Listed below are dependents or qualifying children you've already
                                        entered.</div>
                                </div>
                            </div>
                            <div class="row ps-5">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-9 ms-2">
                                    <div class="d-flex justify-content-between px-3">
                                        <b class="pt-3">Dependent Name</b>
                                        <a href="{{ route('dependents.create') }}" class="btn btn-primary rounded-0"><b
                                                class="text-white"><i class="fa fa-plus"></i>&nbsp;&nbsp;Add a
                                                Dependent</b></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row ps-5 py-3 pb-5">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-9 ms-2 pb-2">
                                    <div class="px-4 pe-5 custom-index-card">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                @foreach ($dependents as $dependent)
                                                    <div class="d-flex justify-content-between m-4 mx-2">
                                                        <div><span
                                                                class="h6">{{ $dependent->first_name . ' ' . $dependent->last_name }}</span>
                                                        </div>
                                                        <div>
                                                            <a href="{{ route('dependents.edit', $dependent) }}"
                                                                class="h6 pe-5">Edit</a>&nbsp;&nbsp;
                                                            <form action="{{ route('dependents.destroy', $dependent) }}"
                                                                method="POST" class="d-inline">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button class="btn btn-link text-dark pe-4"><i
                                                                        class="fa fa-trash" aria-hidden="true"
                                                                        onclick="return confirm('Are you sure you want to delete this?')"></i></button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#whoQualifiesModel" class="text-primary h6">Who
                                        qualifies as a dependent?</a>
                                </div>
                            </div>
                            <span class="d-flex justify-content-center">
                                <hr class="mb-3 mt-0 w-75">
                            </span>
                        </div>
                        <div class="tile-footer d-flex justify-content-between px-lg-5 mx-lg-5 mb-lg-4">
                            <a class="btn btn-white border border-primary rounded-0" href="#"><i
                                    class="me-2 mb-5"></i><b class="text-primary">Previous Page</b></a>&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-primary rounded-0" type="submit"><i class="me-2"></i><b
                                    class="text-light">No, Continue</b></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="whoQualifiesModel" tabindex="-1" aria-labelledby="whoQualifiesModel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="whoQualifiesModel">Who qualifies as a dependent?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body">
                        <p>Along with using SSL encryption to protect sensitive information online, we also take great
                            care to protect user information offline. The FreeTaxUSA.com servers are located in secure
                            data storage facilities with strict security measures and procedures in place. All user
                            information, not just the sensitive information mentioned above, is restricted to only key
                            employees who need the information to perform a specific job function (Example: the customer
                            support manager). Furthermore, all employees are kept up to date on company security and
                            privacy best practices. Before every tax season, as well as any time new policies are added,
                            employees of FreeTaxUSA.com are notified and/or reminded about the importance placed on
                            privacy, and what they can do to ensure the security of user information. However, no method
                            of transmission over the Internet, or method of electronic storage, is 100% secure. If you
                            have any further questions about the security at FreeTaxUSA.com, you can send an email to <a
                                href="mailto:support@support.FreeTaxUSA.com">support@support.FreeTaxUSA.com</a>. </p>
                        <h2 class="t4 pt-3">Community Forums</h2>
                        <p>FreeTaxUSA.com may provide a community forum as a separate service that requires you to
                            create a user account and login information separate from your account for tax preparation
                            products and services. Your account and user information for the community forum may be
                            deleted at your request by emailing your request for deletion to <a
                                href="mailto:community@FreeTaxUSA.com">community@FreeTaxUSA.com</a>. If you are a
                            resident of California, please refer to the California Privacy Rights section below for any
                            additional information about your rights. All of your account information will be deleted
                            and will not be recoverable. In the event your account is deleted, whether at your request
                            or by termination at the election of FreeTaxUSA.com, the content you have posted may remain
                            on the forum but will no longer be linked to or identified by your account information. </p>
                        <h2 class="t4 pt-3">Links to 3rd Party Sites</h2>
                        <p>Our Site includes links to other websites whose privacy practices may differ from those of
                            FreeTaxUSA.com. If you submit personally identifiable information to any of those sites,
                            your information is governed by their privacy statements. We encourage you to carefully read
                            the privacy statement of any website you visit. </p>
                        <h2 class="t4 pt-3">Notification of Changes</h2>
                        <p>If the privacy statement is changed, we will notify you here, by email, or by means of a
                            notice on the footer of our homepage and sign in screens. We reserve the right to modify
                            this privacy statement at any time. </p>
                        <h2 class="t4">State Privacy Acts</h2>
                        <p>Please visit <a aria-label="click to go to state privacy page"
                                href="http://www.FreeTaxUSA.com/state-privacy">this page</a> for more information on
                            California Consumer Privacy Act (CCPA). </p>
                        <p>Other state privacy acts defer to Gramm-Leach-Bliley Act (GLBA) for consumer privacy
                            protections. We comply with GLBA and this privacy statement explains your privacy rights as
                            our customer. </p>
                        <h2 class="t4 pt-3">Contact Information</h2>
                        <p>If you have additional questions regarding FreeTaxUSA.com's privacy or security policies,
                            please send your question to <a
                                href="mailto:webmaster@FreeTaxUSA.com">webmaster@FreeTaxUSA.com</a>.</p>
                        <p>Or, address your written question to:</p>
                        <p><span class="fw-bold">FreeTaxUSA - Privacy</span><br> 1366 East 1120 South<br> Provo, UT
                            84606 </p>
                        <p>If you have an unresolved privacy or data use concern that we have not addressed
                            satisfactorily, please contact our U.S.-based third-party dispute resolution provider (free
                            of charge) at <a href="https://feedback-form.truste.com/watchdog/request"
                                target="_blank">https://feedback-form.truste.com/watchdog/request</a>.</p>
                        </section>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection
