<?php
/**
 * @author Christian Archer <sunchaser@sunchaser.info>
 * @copyright © 2019, Christian Archer
 * @license MIT
 */

namespace WPReadme2Markdown\Cli;

use Symfony\Component\Console\Application as ConsoleApplication;

class Application extends ConsoleApplication
{
    private $libVersion;

    public function __construct($version = '@package_version@', $libVersion = '@lib_version@')
    {
        parent::__construct('wp2md cli', $version === '@package_version@' ? 'UNKNOWN' : $version);

        $this->add(new Convert());
        $this->setDefaultCommand('wp2md', true);
        $this->libVersion = $libVersion;
    }

    public function getLongVersion()
    {
        $appVersion = parent::getLongVersion();

        if ('@lib_version@' !== $this->libVersion) {
            $appVersion .= "\n" . sprintf('wpreadme2markdown <info>%s</info>', $this->libVersion);
        }

        return $appVersion;
    }
}
