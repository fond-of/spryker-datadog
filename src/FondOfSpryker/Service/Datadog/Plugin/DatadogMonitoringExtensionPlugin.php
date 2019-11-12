<?php

namespace FondOfSpryker\Service\Datadog\Plugin;

use Spryker\Service\Kernel\AbstractPlugin;
use Spryker\Service\MonitoringExtension\Dependency\Plugin\MonitoringExtensionPluginInterface;

class DatadogMonitoringExtensionPlugin extends AbstractPlugin implements MonitoringExtensionPluginInterface
{
    /**
     * DatadogMonitoringExtensionPlugin constructor.
     */
    public function __construct()
    {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $message
     * @param \Exception|\Throwable $exception
     *
     * @return void
     */
    public function setError(string $message, $exception): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string|null $application
     * @param string|null $store
     * @param string|null $environment
     *
     * @return void
     */
    public function setApplicationName(
        ?string $application = null,
        ?string $store = null,
        ?string $environment = null
    ): void {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $name
     *
     * @return void
     */
    public function setTransactionName(string $name): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @return void
     */
    public function markStartTransaction(): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @return void
     */
    public function markEndOfTransaction(): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @return void
     */
    public function markIgnoreTransaction(): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @return void
     */
    public function markAsConsoleCommand(): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $key
     * @param mixed $value
     *
     * @return void
     */
    public function addCustomParameter(string $key, $value): void
    {
    }

    /**
     * {@inheritdoc}
     *
     * @api
     *
     * @param string $tracer classname::function_name.
     *
     * @return void
     */
    public function addCustomTracer(string $tracer): void
    {
    }
}
