# Optimizely PHP-SDK

## Table of Contents

* [CurlEventDispatcher](#curleventdispatcher)
    * [dispatchEvent](#dispatchevent)
* [DefaultErrorHandler](#defaulterrorhandler)
    * [handleError](#handleerror)
* [DefaultEventDispatcher](#defaulteventdispatcher)
    * [__construct](#__construct)
    * [dispatchEvent](#dispatchevent-1)
* [DefaultLogger](#defaultlogger)
    * [__construct](#__construct-1)
    * [log](#log)
* [InvalidAttributeException](#invalidattributeexception)
* [InvalidAudienceException](#invalidaudienceexception)
* [InvalidCallbackArgumentCountException](#invalidcallbackargumentcountexception)
* [InvalidEventException](#invalideventexception)
* [InvalidEventTagException](#invalideventtagexception)
* [InvalidExperimentException](#invalidexperimentexception)
* [InvalidFeatureFlagException](#invalidfeatureflagexception)
* [InvalidFeatureVariableException](#invalidfeaturevariableexception)
* [InvalidGroupException](#invalidgroupexception)
* [InvalidInputException](#invalidinputexception)
* [InvalidNotificationTypeException](#invalidnotificationtypeexception)
* [InvalidRolloutException](#invalidrolloutexception)
* [InvalidVariationException](#invalidvariationexception)
* [NoOpErrorHandler](#nooperrorhandler)
    * [handleError](#handleerror-1)
* [NoOpLogger](#nooplogger)
    * [log](#log-1)
* [NotificationCenter](#notificationcenter)
    * [addNotificationListener](#addnotificationlistener)
    * [removeNotificationListener](#removenotificationlistener)
    * [clearNotifications](#clearnotifications)
    * [clearNotificationListeners](#clearnotificationlisteners)
    * [cleanAllNotifications](#cleanallnotifications)
    * [clearAllNotificationListeners](#clearallnotificationlisteners)
* [NotificationType](#notificationtype)
* [Optimizely](#optimizely)
    * [__construct](#__construct-2)
    * [activate](#activate)
    * [track](#track)
    * [getVariation](#getvariation)
    * [setForcedVariation](#setforcedvariation)
    * [getForcedVariation](#getforcedvariation)
    * [isFeatureEnabled](#isfeatureenabled)
    * [getEnabledFeatures](#getenabledfeatures)
    * [getFeatureVariableValueForType](#getfeaturevariablevaluefortype)
    * [getFeatureVariableBoolean](#getfeaturevariableboolean)
    * [getFeatureVariableInteger](#getfeaturevariableinteger)
    * [getFeatureVariableDouble](#getfeaturevariabledouble)
    * [getFeatureVariableString](#getfeaturevariablestring)
* [OptimizelyException](#optimizelyexception)

## CurlEventDispatcher

Class CurlEventDispatcher



* Full name: \Optimizely\Event\Dispatcher\CurlEventDispatcher
* This class implements: \Optimizely\Event\Dispatcher\EventDispatcherInterface


### dispatchEvent



```php
CurlEventDispatcher::dispatchEvent( \Optimizely\Event\LogEvent $event )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Optimizely\Event\LogEvent** |  |




---

## DefaultErrorHandler





* Full name: \Optimizely\ErrorHandler\DefaultErrorHandler
* This class implements: \Optimizely\ErrorHandler\ErrorHandlerInterface


### handleError



```php
DefaultErrorHandler::handleError( \Exception $error )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\Exception** |  |




---

## DefaultEventDispatcher

Class DefaultEventDispatcher



* Full name: \Optimizely\Event\Dispatcher\DefaultEventDispatcher
* This class implements: \Optimizely\Event\Dispatcher\EventDispatcherInterface


### __construct



```php
DefaultEventDispatcher::__construct( \GuzzleHttp\Client $httpClient = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$httpClient` | **\GuzzleHttp\Client** |  |




---

### dispatchEvent



```php
DefaultEventDispatcher::dispatchEvent( \Optimizely\Event\LogEvent $event )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$event` | **\Optimizely\Event\LogEvent** |  |




---

## DefaultLogger

Class DefaultLogger



* Full name: \Optimizely\Logger\DefaultLogger
* This class implements: \Optimizely\Logger\LoggerInterface


### __construct

DefaultLogger constructor.

```php
DefaultLogger::__construct( integer $minLevel = \Monolog\Logger::INFO, string $stream = &quot;stdout&quot; )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$minLevel` | **integer** | Minimum level of messages to be logged. |
| `$stream` | **string** | The PHP stream to log output. |




---

### log



```php
DefaultLogger::log(  $logLevel,  $logMessage )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logLevel` | **** |  |
| `$logMessage` | **** |  |




---

## InvalidAttributeException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidAttributeException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidAudienceException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidAudienceException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidCallbackArgumentCountException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidCallbackArgumentCountException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidEventException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidEventException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidEventTagException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidEventTagException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidExperimentException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidExperimentException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidFeatureFlagException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidFeatureFlagException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidFeatureVariableException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidFeatureVariableException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidGroupException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidGroupException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidInputException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidInputException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidNotificationTypeException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidNotificationTypeException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidRolloutException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidRolloutException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## InvalidVariationException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\InvalidVariationException
* Parent class: \Optimizely\Exceptions\OptimizelyException


## NoOpErrorHandler

Class NoOpErrorHandler



* Full name: \Optimizely\ErrorHandler\NoOpErrorHandler
* This class implements: \Optimizely\ErrorHandler\ErrorHandlerInterface


### handleError



```php
NoOpErrorHandler::handleError( \Exception $error )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$error` | **\Exception** |  |




---

## NoOpLogger

Class NoOpLogger



* Full name: \Optimizely\Logger\NoOpLogger
* This class implements: \Optimizely\Logger\LoggerInterface


### log



```php
NoOpLogger::log(  $logLevel,  $logMessage )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$logLevel` | **** |  |
| `$logMessage` | **** |  |




---

## NotificationCenter





* Full name: \Optimizely\Notification\NotificationCenter


### addNotificationListener

Adds a notification callback for a notification type to the notification center

```php
NotificationCenter::addNotificationListener( string $notification_type, string $notification_callback ): null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notification_type` | **string** | One of the constants defined in NotificationType |
| `$notification_callback` | **string** | A valid PHP callback |


**Return Value:**

Given invalid notification type/callback
        -1    Given callback has been already added
        int   Notification ID for the added callback



---

### removeNotificationListener

Removes notification callback from the notification center

```php
NotificationCenter::removeNotificationListener( integer $notification_id ): true
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notification_id` | **integer** | notification ID |


**Return Value:**

When callback removed
        false  When no callback found for the given notification ID



---

### clearNotifications

Logs deprecation message

```php
NotificationCenter::clearNotifications(  $notification_type )
```



* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.

**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notification_type` | **** |  |




---

### clearNotificationListeners

Removes all notification callbacks for the given notification type

```php
NotificationCenter::clearNotificationListeners( string $notification_type )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$notification_type` | **string** | One of the constants defined in NotificationType |




---

### cleanAllNotifications

Logs deprecation message

```php
NotificationCenter::cleanAllNotifications(  )
```



* **Warning:** this method is **deprecated**. This means that this method will likely be removed in a future version.




---

### clearAllNotificationListeners

Removes all notifications for all notification types
from the notification center

```php
NotificationCenter::clearAllNotificationListeners(  )
```







---

## NotificationType





* Full name: \Optimizely\Notification\NotificationType


## Optimizely

Class Optimizely



* Full name: \Optimizely\Optimizely


### __construct

Optimizely constructor for managing Full Stack PHP projects.

```php
Optimizely::__construct(  $datafile,  $eventDispatcher = null,  $logger = null,  $errorHandler = null,  $skipJsonValidation = false,  $userProfileService = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$datafile` | **** | string JSON string representing the project. |
| `$eventDispatcher` | **** | EventDispatcherInterface |
| `$logger` | **** | LoggerInterface |
| `$errorHandler` | **** | ErrorHandlerInterface |
| `$skipJsonValidation` | **** | boolean representing whether JSON schema validation needs to be performed. |
| `$userProfileService` | **** | UserProfileServiceInterface |




---

### activate

Buckets visitor and sends impression event to Optimizely.

```php
Optimizely::activate( string $experimentKey, string $userId, array $attributes = null ): null|string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$experimentKey` | **string** | Key identifying the experiment. |
| `$userId` | **string** | ID for user. |
| `$attributes` | **array** | Attributes of the user. |


**Return Value:**

Representing the variation key.



---

### track

Send conversion event to Optimizely.

```php
Optimizely::track(  $eventKey,  $userId,  $attributes = null,  $eventTags = null )
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$eventKey` | **** | string Event key representing the event which needs to be recorded. |
| `$userId` | **** | string ID for user. |
| `$attributes` | **** | array Attributes of the user. |
| `$eventTags` | **** | array Hash representing metadata associated with the event. |




---

### getVariation

Get variation where user will be bucketed.

```php
Optimizely::getVariation(  $experimentKey,  $userId,  $attributes = null ): null|string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$experimentKey` | **** | string Key identifying the experiment. |
| `$userId` | **** | string ID for user. |
| `$attributes` | **** | array Attributes of the user. |


**Return Value:**

Representing the variation key.



---

### setForcedVariation

Force a user into a variation for a given experiment.

```php
Optimizely::setForcedVariation(  $experimentKey,  $userId,  $variationKey ): boolean
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$experimentKey` | **** | string Key identifying the experiment. |
| `$userId` | **** | string The user ID to be used for bucketing. |
| `$variationKey` | **** | string The variation key specifies the variation which the user
will be forced into. If null, then clear the existing experiment-to-variation mapping. |


**Return Value:**

A boolean value that indicates if the set completed successfully.



---

### getForcedVariation

Gets the forced variation for a given user and experiment.

```php
Optimizely::getForcedVariation(  $experimentKey,  $userId ): string|null
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$experimentKey` | **** | string Key identifying the experiment. |
| `$userId` | **** | string The user ID to be used for bucketing. |


**Return Value:**

The forced variation key.



---

### isFeatureEnabled

Determine whether a feature is enabled.

```php
Optimizely::isFeatureEnabled(  $featureFlagKey,  $userId,  $attributes = null ): boolean
```

Sends an impression event if the user is bucketed into an experiment using the feature.


**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$featureFlagKey` | **** |  |
| `$userId` | **** |  |
| `$attributes` | **** |  |




---

### getEnabledFeatures

Get keys of all feature flags which are enabled for the user

```php
Optimizely::getEnabledFeatures(  $userId,  $attributes = null ): array
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$userId` | **** |  |
| `$attributes` | **** |  |


**Return Value:**

List of feature flag keys



---

### getFeatureVariableValueForType

Get the string value of the specified variable in the feature flag.

```php
Optimizely::getFeatureVariableValueForType(  $featureFlagKey,  $variableKey,  $userId,  $attributes = null,  $variableType = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$featureFlagKey` | **** |  |
| `$variableKey` | **** |  |
| `$userId` | **** |  |
| `$attributes` | **** |  |
| `$variableType` | **** |  |


**Return Value:**

Feature variable value / null



---

### getFeatureVariableBoolean

Get the Boolean value of the specified variable in the feature flag.

```php
Optimizely::getFeatureVariableBoolean(  $featureFlagKey,  $variableKey,  $userId,  $attributes = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$featureFlagKey` | **** |  |
| `$variableKey` | **** |  |
| `$userId` | **** |  |
| `$attributes` | **** |  |


**Return Value:**

boolean variable value / null



---

### getFeatureVariableInteger

Get the Integer value of the specified variable in the feature flag.

```php
Optimizely::getFeatureVariableInteger(  $featureFlagKey,  $variableKey,  $userId,  $attributes = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$featureFlagKey` | **** |  |
| `$variableKey` | **** |  |
| `$userId` | **** |  |
| `$attributes` | **** |  |


**Return Value:**

integer variable value / null



---

### getFeatureVariableDouble

Get the Double value of the specified variable in the feature flag.

```php
Optimizely::getFeatureVariableDouble(  $featureFlagKey,  $variableKey,  $userId,  $attributes = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$featureFlagKey` | **** |  |
| `$variableKey` | **** |  |
| `$userId` | **** |  |
| `$attributes` | **** |  |


**Return Value:**

double variable value / null



---

### getFeatureVariableString

Get the String value of the specified variable in the feature flag.

```php
Optimizely::getFeatureVariableString(  $featureFlagKey,  $variableKey,  $userId,  $attributes = null ): string
```




**Parameters:**

| Parameter | Type | Description |
|-----------|------|-------------|
| `$featureFlagKey` | **** |  |
| `$variableKey` | **** |  |
| `$userId` | **** |  |
| `$attributes` | **** |  |


**Return Value:**

variable value / null



---

## OptimizelyException

Class OptimizelyException



* Full name: \Optimizely\Exceptions\OptimizelyException
* Parent class: 




--------
> This document was automatically generated from source code comments on 2018-08-31 using [phpDocumentor](http://www.phpdoc.org/) and [cvuorinen/phpdoc-markdown-public](https://github.com/cvuorinen/phpdoc-markdown-public)
