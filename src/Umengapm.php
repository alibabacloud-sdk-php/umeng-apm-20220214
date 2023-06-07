<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengapm\V20220214;

use AlibabaCloud\Endpoint\Endpoint;
use AlibabaCloud\OpenApiUtil\OpenApiUtilClient;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetH5PageTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetH5PageTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetLaunchTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetLaunchTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNativePageTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNativePageTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetNetworkTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetStatTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetStatTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetSymUploadParamRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetSymUploadParamResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetTodayStatTrendRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\GetTodayStatTrendResponse;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\UpdateAlertPlanRequest;
use AlibabaCloud\SDK\Umengapm\V20220214\Models\UpdateAlertPlanResponse;
use AlibabaCloud\Tea\Utils\Utils;
use AlibabaCloud\Tea\Utils\Utils\RuntimeOptions;
use Darabonba\OpenApi\Models\OpenApiRequest;
use Darabonba\OpenApi\Models\Params;
use Darabonba\OpenApi\OpenApiClient;

class Umengapm extends OpenApiClient
{
    public function __construct($config)
    {
        parent::__construct($config);
        $this->_endpointRule = '';
        $this->checkConfig($config);
        $this->_endpoint = $this->getEndpoint('umeng-apm', $this->_regionId, $this->_endpointRule, $this->_network, $this->_suffix, $this->_endpointMap, $this->_endpoint);
    }

    /**
     * @param string   $productId
     * @param string   $regionId
     * @param string   $endpointRule
     * @param string   $network
     * @param string   $suffix
     * @param string[] $endpointMap
     * @param string   $endpoint
     *
     * @return string
     */
    public function getEndpoint($productId, $regionId, $endpointRule, $network, $suffix, $endpointMap, $endpoint)
    {
        if (!Utils::empty_($endpoint)) {
            return $endpoint;
        }
        if (!Utils::isUnset($endpointMap) && !Utils::empty_(@$endpointMap[$regionId])) {
            return @$endpointMap[$regionId];
        }

        return Endpoint::getEndpointRules($productId, $regionId, $endpointRule, $network, $suffix);
    }

    /**
     * @param GetH5PageTrendRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetH5PageTrendResponse
     */
    public function getH5PageTrendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['appVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->timeUnit)) {
            $query['timeUnit'] = $request->timeUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetH5PageTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getH5PageTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetH5PageTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetH5PageTrendRequest $request
     *
     * @return GetH5PageTrendResponse
     */
    public function getH5PageTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getH5PageTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetLaunchTrendRequest $request
     * @param string[]              $headers
     * @param RuntimeOptions        $runtime
     *
     * @return GetLaunchTrendResponse
     */
    public function getLaunchTrendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['appVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->timeUnit)) {
            $query['timeUnit'] = $request->timeUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetLaunchTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getLaunchTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetLaunchTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetLaunchTrendRequest $request
     *
     * @return GetLaunchTrendResponse
     */
    public function getLaunchTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getLaunchTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetNativePageTrendRequest $request
     * @param string[]                  $headers
     * @param RuntimeOptions            $runtime
     *
     * @return GetNativePageTrendResponse
     */
    public function getNativePageTrendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['appVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->timeUnit)) {
            $query['timeUnit'] = $request->timeUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNativePageTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getNativePageTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetNativePageTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNativePageTrendRequest $request
     *
     * @return GetNativePageTrendResponse
     */
    public function getNativePageTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNativePageTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetNetworkTrendRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return GetNetworkTrendResponse
     */
    public function getNetworkTrendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['appVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->timeUnit)) {
            $query['timeUnit'] = $request->timeUnit;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetNetworkTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getNetworkTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetNetworkTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetNetworkTrendRequest $request
     *
     * @return GetNetworkTrendResponse
     */
    public function getNetworkTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getNetworkTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetStatTrendRequest $request
     * @param string[]            $headers
     * @param RuntimeOptions      $runtime
     *
     * @return GetStatTrendResponse
     */
    public function getStatTrendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['appVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->endDate)) {
            $query['endDate'] = $request->endDate;
        }
        if (!Utils::isUnset($request->startDate)) {
            $query['startDate'] = $request->startDate;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetStatTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getStatTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetStatTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetStatTrendRequest $request
     *
     * @return GetStatTrendResponse
     */
    public function getStatTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getStatTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetSymUploadParamRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetSymUploadParamResponse
     */
    public function getSymUploadParamWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['appVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->fileName)) {
            $query['fileName'] = $request->fileName;
        }
        if (!Utils::isUnset($request->fileType)) {
            $query['fileType'] = $request->fileType;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetSymUploadParam',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/getSymUploadParam',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetSymUploadParamResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetSymUploadParamRequest $request
     *
     * @return GetSymUploadParamResponse
     */
    public function getSymUploadParam($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getSymUploadParamWithOptions($request, $headers, $runtime);
    }

    /**
     * @param GetTodayStatTrendRequest $request
     * @param string[]                 $headers
     * @param RuntimeOptions           $runtime
     *
     * @return GetTodayStatTrendResponse
     */
    public function getTodayStatTrendWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->appVersion)) {
            $query['appVersion'] = $request->appVersion;
        }
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->type)) {
            $query['type'] = $request->type;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'GetTodayStatTrend',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/stat/getTodayStatTrend',
            'method'      => 'GET',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return GetTodayStatTrendResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param GetTodayStatTrendRequest $request
     *
     * @return GetTodayStatTrendResponse
     */
    public function getTodayStatTrend($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->getTodayStatTrendWithOptions($request, $headers, $runtime);
    }

    /**
     * @param UpdateAlertPlanRequest $request
     * @param string[]               $headers
     * @param RuntimeOptions         $runtime
     *
     * @return UpdateAlertPlanResponse
     */
    public function updateAlertPlanWithOptions($request, $headers, $runtime)
    {
        Utils::validateModel($request);
        $query = [];
        if (!Utils::isUnset($request->dataSourceId)) {
            $query['dataSourceId'] = $request->dataSourceId;
        }
        if (!Utils::isUnset($request->planId)) {
            $query['planId'] = $request->planId;
        }
        if (!Utils::isUnset($request->versions)) {
            $query['versions'] = $request->versions;
        }
        $req = new OpenApiRequest([
            'headers' => $headers,
            'query'   => OpenApiUtilClient::query($query),
        ]);
        $params = new Params([
            'action'      => 'UpdateAlertPlan',
            'version'     => '2022-02-14',
            'protocol'    => 'HTTPS',
            'pathname'    => '/updateAlertPlan',
            'method'      => 'POST',
            'authType'    => 'AK',
            'style'       => 'ROA',
            'reqBodyType' => 'json',
            'bodyType'    => 'json',
        ]);

        return UpdateAlertPlanResponse::fromMap($this->callApi($params, $req, $runtime));
    }

    /**
     * @param UpdateAlertPlanRequest $request
     *
     * @return UpdateAlertPlanResponse
     */
    public function updateAlertPlan($request)
    {
        $runtime = new RuntimeOptions([]);
        $headers = [];

        return $this->updateAlertPlanWithOptions($request, $headers, $runtime);
    }
}
