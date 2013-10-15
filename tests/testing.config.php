<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

return array(
    'zfr_rest' => array(
        'object_manager' => 'doctrine.entitymanager.orm_default',
        'cache'          => 'array_cache',
        'drivers'        => array(
            'application_driver' => array(
                'class' => 'ZfrRest\Resource\Metadata\Driver\AnnotationDriver'
            )
        )
    ),

    'doctrine' => array(
        'driver' => array(
            'annotation_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/ZfrRestTest/Resource/Metadata/Driver/AnnotationAsset')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'ZfrRestTest/Resource/Metadata/Driver/AnnotationAsset' => 'annotation_driver'
                )
            )
        ),

        'connection' => array(
            'orm_default' => array(
                'params' => array(
                    'host'          => null,
                    'port'          => null,
                    'user'          => null,
                    'password'      => null,
                    'dbname'        => null,
                    'driver'        => 'pdo_sqlite',
                    'driverClass'   => 'Doctrine\DBAL\Driver\PDOSqlite\Driver',
                    'path'          => null,
                    'memory'        => true,
                ),
            ),
        ),
    ),
);
