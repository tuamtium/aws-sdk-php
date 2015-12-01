<?php
// This file was auto-generated from sdk-root/src/data/elasticmapreduce/2009-03-31/waiters-2.json
return [ 'version' => 2, 'waiters' => [ 'ClusterRunning' => [ 'acceptors' => [ [ 'argument' => 'Cluster.Status.State', 'expected' => 'RUNNING', 'matcher' => 'path', 'state' => 'success', ], [ 'argument' => 'Cluster.Status.State', 'expected' => 'WAITING', 'matcher' => 'path', 'state' => 'success', ], [ 'argument' => 'Cluster.Status.State', 'expected' => 'TERMINATING', 'matcher' => 'path', 'state' => 'failure', ], [ 'argument' => 'Cluster.Status.State', 'expected' => 'TERMINATED', 'matcher' => 'path', 'state' => 'failure', ], [ 'argument' => 'Cluster.Status.State', 'expected' => 'TERMINATED_WITH_ERRORS', 'matcher' => 'path', 'state' => 'failure', ], ], 'delay' => 30, 'maxAttempts' => 60, 'operation' => 'DescribeCluster', ], 'StepComplete' => [ 'acceptors' => [ [ 'argument' => 'Step.Status.State', 'expected' => 'COMPLETED', 'matcher' => 'path', 'state' => 'success', ], [ 'argument' => 'Step.Status.State', 'expected' => 'FAILED', 'matcher' => 'path', 'state' => 'failure', ], [ 'argument' => 'Step.Status.State', 'expected' => 'CANCELLED', 'matcher' => 'path', 'state' => 'failure', ], ], 'delay' => 30, 'maxAttempts' => 60, 'operation' => 'DescribeStep', ], ],];