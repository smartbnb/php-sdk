<?php
/**
 * Copyright 2019, Optimizely
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Optimizely\Tests;

use Optimizely\Entity\Attribute;
use Optimizely\Entity\Audience;
use Optimizely\Entity\Event;
use Optimizely\Entity\Experiment;
use Optimizely\Entity\FeatureFlag;
use Optimizely\Entity\FeatureVariable;
use Optimizely\Entity\Group;
use Optimizely\Entity\Rollout;
use Optimizely\Entity\TrafficAllocation;
use Optimizely\Entity\VariableUsage;
use Optimizely\Entity\Variation;
use Optimizely\ErrorHandler\NoOpErrorHandler;
use Optimizely\Logger\NoOpLogger;
use Optimizely\ProjectConfig;

class EntitiesTest extends \PHPUnit_Framework_TestCase
{
    private $config;

    protected function setUp()
    {
        $this->config = new ProjectConfig(DATAFILE, new NoOpLogger(), new NoOpErrorHandler);
    }

    public function testAttributeToString()
    {
        $attribute = new Attribute('7723280020', 'device_type');
        $this->assertEquals($attribute->__toString(), "Attribute{id='7723280020', key='device_type'}");
    }

    public function testAudienceToString()
    {
        $audience = $this->config->getAudience('7718080042');
        $this->assertEquals($audience->__toString(),
                            'Audience{id=\'7718080042\', name=\'iPhone users in San Francisco\', conditions=["and", ["or", ["or",' .
                            ' {"name": "device_type", "type": "custom_attribute", "value": "iPhone"}]], ["or", ["or",'.
                            ' {"name": "location", "type": "custom_attribute", "value": "San Francisco"}]]]}'
                           );
    }

    public function testEventToString()
    {
        $event = $this->config->getEvent('multi_exp_event');
        $this->assertEquals($event->__toString(),
                            'Event{id=\'7718020065\', key=\'multi_exp_event\', experimentIds=["7716830082","122230"]}'
                           );
    }

    public function testExperimentToString()
    {
        $experiment= $this->config->getExperimentFromId('7716830082');
        $this->assertEquals($experiment->__toString(),
                            'Experiment{id=\'7716830082\', key=\'test_experiment\', layerId=\'7719770039\', status=\'Running\',' .
                            ' audienceIds=["7718080042"], audienceConditions=null, variations=["Variation{id=\'7722370027\','.
                            ' key=\'control\', featureEnabled=false, variableUsageInstances=[]}","Variation{id=\'7721010009\', key=\'variation\','.
                            ' featureEnabled=false, variableUsageInstances=[]}"], forcedVariations={"user1":"control"}, trafficAllocation='.
                            '["TrafficAllocation{entityId=\'\', endOfRange=1500}","TrafficAllocation{entityId=\'7722370027\', endOfRange=4000}",'.
                            '"TrafficAllocation{entityId=\'7721010009\', endOfRange=8000}"]}'
                           );
    }

    public function testFeatureFlagToString()
    {
        $featureFlag = $this->config->getFeatureFlagFromKey('boolean_single_variable_feature');
        $this->assertEquals($featureFlag->__toString(),
                            'FeatureFlag{id=\'155554\', key=\'boolean_single_variable_feature\', rolloutId=\'166660\', experimentIds=[],'.
                            ' variables=["FeatureVariable{id=\'155556\', key=\'boolean_variable\', type=\'boolean\', defaultValue=\'true\'}"]}'
                          );
    }

    public function testFeatureVariableToString()
    {
        $featureVariable = $this->config->getFeatureVariableFromKey('boolean_single_variable_feature', 'boolean_variable');
        $this->assertEquals($featureVariable->__toString(),
                            'FeatureVariable{id=\'155556\', key=\'boolean_variable\', type=\'boolean\', defaultValue=\'true\'}'
                          );
    }

    public function testGroupToString()
    {
        $group = $this->config->getGroup('7722400015');

        $this->assertEquals($group->__toString(),
                            'Group{id=\'7722400015\', policy=\'random\', experiments=[{"status":"Running","key":"group_experiment_1",'.
                            '"layerId":"7721010011","trafficAllocation":[{"entityId":"7722260071","endOfRange":5000},{"entityId":"7722360022",'.
                            '"endOfRange":10000}],"audienceIds":[],"variations":[{"id":"7722260071","key":"group_exp_1_var_1","variables":'.
                            '[{"id":"155563","value":"groupie_1_v1"}],"featureEnabled":true},{"id":"7722360022","key":"group_exp_1_var_2",'.
                            '"variables":[{"id":"155563","value":"groupie_1_v2"}],"featureEnabled":true}],"forcedVariations":{"user1":"group_exp_1_var_1"}'.
                            ',"id":"7723330021"},{"status":"Running","key":"group_experiment_2","layerId":"7721020020","trafficAllocation":'.
                            '[{"entityId":"7713030086","endOfRange":5000},{"entityId":"7725250007","endOfRange":10000}],"audienceIds":[],'.
                            '"variations":[{"id":"7713030086","key":"group_exp_2_var_1","variables":[{"id":"155563","value":"groupie_2_v1"}],'.
                            '"featureEnabled":true},{"id":"7725250007","key":"group_exp_2_var_2","variables":[{"id":"155563","value":"groupie_2_v1"}],'.
                            '"featureEnabled":true}],"forcedVariations":[],"id":"7718750065"}], trafficAllocation=["TrafficAllocation{entityId=\'\','.
                            ' endOfRange=500}","TrafficAllocation{entityId=\'7723330021\', endOfRange=2000}","TrafficAllocation{entityId=\'7718750065\','.
                            ' endOfRange=6000}"]}'
                          );
    }

    public function testRolloutToString()
    {
        $rollout = $this->config->getRolloutFromId('166661');
        $this->assertEquals($rollout->__toString(),
                            'Rollout{id=\'166661\', experiments=["Experiment{id=\'177774\', key=\'rollout_2_exp_1\', layerId=\'166661\', status=\'Running\','.
                            ' audienceIds=[\"11155\"], audienceConditions=null, variations=[\"Variation{id=\'177775\', key=\'177775\', featureEnabled=true,'.
                            ' variableUsageInstances=[]}\"], forcedVariations=null, trafficAllocation=[\"TrafficAllocation{entityId=\'177775\','.
                            ' endOfRange=1500}\"]}","Experiment{id=\'177779\', key=\'rollout_2_exp_2\', layerId=\'166661\', status=\'Running\','.
                            ' audienceIds=[], audienceConditions=null, variations=[\"Variation{id=\'177780\', key=\'177780\', featureEnabled=true,'.
                            ' variableUsageInstances=[]}\"], forcedVariations=null, trafficAllocation=[\"TrafficAllocation{entityId=\'177780\', '.
                            'endOfRange=1500}\"]}"]}'
                           );
    }

    public function testTrafficAllocationToString()
    {
        $trafficAlloc = new TrafficAllocation('11557362669',1000);
        $this->assertEquals($trafficAlloc->__toString(),
                            'TrafficAllocation{entityId=\'11557362669\', endOfRange=1000}'
                           );
    }

    public function testVariableUsageToString()
    {
        $variableUsage = new VariableUsage('155561','red');
        $this->assertEquals($variableUsage->__toString(),
                            'Variable{id=\'155561\', value=\'red\'}'
                           );
    }

    public function testVariationToString()
    {
        $experiment = $this->config->getExperimentFromId('122230');
        $variations = $experiment->getVariations();
        $this->assertEquals($variations[0]->__toString(),
                            'Variation{id=\'122231\', key=\'Fred\', featureEnabled=true, variableUsageInstances=["Variable{id=\'155560\','.
                            ' value=\'F\'}","Variable{id=\'155561\', value=\'red\'}"]}'
                           );
    }
}
