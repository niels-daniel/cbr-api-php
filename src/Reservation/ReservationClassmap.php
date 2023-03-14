<?php

namespace MetMax\Cbr\Reservation;

use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;

class ReservationClassmap
{
    public static function getCollection(): ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('SubmitRequest', Type\SubmitRequest::class),
            new ClassMap('PartialDate', Type\PartialDate::class),
            new ClassMap('RequestResponse', Type\RequestResponse::class),
            new ClassMap('FindRequestsRequest', Type\FindRequestsRequest::class),
            new ClassMap('FindRequestsResponse', Type\FindRequestsResponse::class),
            new ClassMap('RequestDtoList', Type\RequestDtoList::class),
            new ClassMap('RequestDto', Type\RequestDto::class),
            new ClassMap('CapacityRequest', Type\CapacityRequest::class),
            new ClassMap('CapacityResponse', Type\CapacityResponse::class),
            new ClassMap('CapacityList', Type\CapacityList::class),
            new ClassMap('CapacityDto', Type\CapacityDto::class),
            new ClassMap('ReservationRequest', Type\ReservationRequest::class),
            new ClassMap('ReservationResponse', Type\ReservationResponse::class),
            new ClassMap('ResultsRequest', Type\ResultsRequest::class),
            new ClassMap('ResultsResponse', Type\ResultsResponse::class),
            new ClassMap('ResultList', Type\ResultList::class),
            new ClassMap('ResultDto', Type\ResultDto::class),
            new ClassMap('SubResultList', Type\SubResultList::class),
            new ClassMap('SubResultDto', Type\SubResultDto::class),
            new ClassMap('CancelReservationRequest', Type\CancelReservationRequest::class),
            new ClassMap('CancelReservationResponse', Type\CancelReservationResponse::class),
            new ClassMap('AccountMutationsRequest', Type\AccountMutationsRequest::class),
            new ClassMap('AccountMutationsResponse', Type\AccountMutationsResponse::class),
            new ClassMap('AccountMutationList', Type\AccountMutationList::class),
            new ClassMap('AccountMutationDto', Type\AccountMutationDto::class),
            new ClassMap('ModificationRequest', Type\ModificationRequest::class),
            new ClassMap('ModificationResponse', Type\ModificationResponse::class),
            new ClassMap('CoursesRequest', Type\CoursesRequest::class),
            new ClassMap('CoursesResponse', Type\CoursesResponse::class),
            new ClassMap('CourseList', Type\CourseList::class),
            new ClassMap('CourseDto', Type\CourseDto::class),
            new ClassMap('ArrayOfCourseDayDto', Type\ArrayOfCourseDayDto::class),
            new ClassMap('CourseDayDto', Type\CourseDayDto::class),
            new ClassMap('CourseEnrollmentRequest', Type\CourseEnrollmentRequest::class),
            new ClassMap('CourseEnrollmentResponse', Type\CourseEnrollmentResponse::class),
            new ClassMap('CourseEnrollmentsList', Type\CourseEnrollmentsList::class),
            new ClassMap('CourseEnrollmentDto', Type\CourseEnrollmentDto::class),
            new ClassMap('SaveCourseEnrollmentRequest', Type\SaveCourseEnrollmentRequest::class),
            new ClassMap('CourseEnrollmentUpdates', Type\CourseEnrollmentUpdates::class),
            new ClassMap('CourseEnrollmentUpdateDto', Type\CourseEnrollmentUpdateDto::class),
            new ClassMap('SaveCourseEnrollmentResponse', Type\SaveCourseEnrollmentResponse::class),
            new ClassMap('FaultMessageEnrollmentUpdates', Type\FaultMessageEnrollmentUpdates::class),
            new ClassMap('FaultMessageEnrollmentUpdateDto', Type\FaultMessageEnrollmentUpdateDto::class),
            new ClassMap('CandidatesWithAuthorizationRequest', Type\CandidatesWithAuthorizationRequest::class),
            new ClassMap('CandidateList', Type\CandidateList::class),
            new ClassMap('CandidateDto', Type\CandidateDto::class),
            new ClassMap('SaveCourseResultsRequest', Type\SaveCourseResultsRequest::class),
            new ClassMap('CourseResultList', Type\CourseResultList::class),
            new ClassMap('CourseResultDto', Type\CourseResultDto::class),
            new ClassMap('SaveCourseResultsResponse', Type\SaveCourseResultsResponse::class),
            new ClassMap('ArrayOfstring', Type\ArrayOfstring::class),
        );
    }
}
