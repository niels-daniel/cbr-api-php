<?php

namespace MetMax\Cbr\Reservation;

use Phpro\SoapClient\Caller\Caller;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;

class ReservationClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param  RequestInterface|Type\SubmitRequest  $parameters
     * @return ResultInterface|Type\RequestResponse
     *
     * @throws SoapException
     */
    public function submitRequest(Type\SubmitRequest $parameters): Type\RequestResponse
    {
        return ($this->caller)('SubmitRequest', $parameters);
    }

    /**
     * @param  RequestInterface|Type\FindRequestsRequest  $parameters
     * @return ResultInterface|Type\FindRequestsResponse
     *
     * @throws SoapException
     */
    public function findRequests(Type\FindRequestsRequest $parameters): Type\FindRequestsResponse
    {
        return ($this->caller)('FindRequests', $parameters);
    }

    /**
     * @param  RequestInterface|Type\CapacityRequest  $parameters
     * @return ResultInterface|Type\CapacityResponse
     *
     * @throws SoapException
     */
    public function findCapacity(Type\CapacityRequest $parameters): Type\CapacityResponse
    {
        return ($this->caller)('FindCapacity', $parameters);
    }

    /**
     * @param  RequestInterface|Type\ReservationRequest  $parameters
     * @return ResultInterface|Type\ReservationResponse
     *
     * @throws SoapException
     */
    public function reserveRequest(Type\ReservationRequest $parameters): Type\ReservationResponse
    {
        return ($this->caller)('ReserveRequest', $parameters);
    }

    /**
     * @param  RequestInterface|Type\ResultsRequest  $parameters
     * @return ResultInterface|Type\ResultsResponse
     *
     * @throws SoapException
     */
    public function findResults(Type\ResultsRequest $parameters): Type\ResultsResponse
    {
        return ($this->caller)('FindResults', $parameters);
    }

    /**
     * @param  RequestInterface|Type\CancelReservationRequest  $parameters
     * @return ResultInterface|Type\CancelReservationResponse
     *
     * @throws SoapException
     */
    public function cancelReservation(Type\CancelReservationRequest $parameters): Type\CancelReservationResponse
    {
        return ($this->caller)('CancelReservation', $parameters);
    }

    /**
     * @param  RequestInterface|Type\AccountMutationsRequest  $parameters
     * @return ResultInterface|Type\AccountMutationsResponse
     *
     * @throws SoapException
     */
    public function getAccountMutations(Type\AccountMutationsRequest $parameters): Type\AccountMutationsResponse
    {
        return ($this->caller)('GetAccountMutations', $parameters);
    }

    /**
     * @param  RequestInterface|Type\ModificationRequest  $parameters
     * @return ResultInterface|Type\ModificationResponse
     *
     * @throws SoapException
     */
    public function modifyRequest(Type\ModificationRequest $parameters): Type\ModificationResponse
    {
        return ($this->caller)('ModifyRequest', $parameters);
    }

    /**
     * @param  RequestInterface|Type\CoursesRequest  $parameters
     * @return ResultInterface|Type\CoursesResponse
     *
     * @throws SoapException
     */
    public function findCourses(Type\CoursesRequest $parameters): Type\CoursesResponse
    {
        return ($this->caller)('FindCourses', $parameters);
    }

    /**
     * @param  RequestInterface|Type\CourseEnrollmentRequest  $parameters
     * @return ResultInterface|Type\CourseEnrollmentResponse
     *
     * @throws SoapException
     */
    public function findCourseEnrollments(Type\CourseEnrollmentRequest $parameters): Type\CourseEnrollmentResponse
    {
        return ($this->caller)('FindCourseEnrollments', $parameters);
    }

    /**
     * @param  RequestInterface|Type\SaveCourseEnrollmentRequest  $parameters
     * @return ResultInterface|Type\SaveCourseEnrollmentResponse
     *
     * @throws SoapException
     */
    public function saveCourseEnrollments(Type\SaveCourseEnrollmentRequest $parameters): Type\SaveCourseEnrollmentResponse
    {
        return ($this->caller)('SaveCourseEnrollments', $parameters);
    }

    /**
     * @param  RequestInterface|Type\CandidatesWithAuthorizationRequest  $parameters
     * @return ResultInterface|Type\CandidateList
     *
     * @throws SoapException
     */
    public function findCandidatesWithAuthorization(Type\CandidatesWithAuthorizationRequest $parameters): Type\CandidateList
    {
        return ($this->caller)('FindCandidatesWithAuthorization', $parameters);
    }

    /**
     * @param  RequestInterface|Type\SaveCourseResultsRequest  $parameters
     * @return ResultInterface|Type\SaveCourseResultsResponse
     *
     * @throws SoapException
     */
    public function saveCourseResults(Type\SaveCourseResultsRequest $parameters): Type\SaveCourseResultsResponse
    {
        return ($this->caller)('SaveCourseResults', $parameters);
    }
}
