<?php $this->layout('layout', ['title' => 'Zend Framework Components']); ?>

<h1>Zend Framework Components</h1>

<table class="table">
    <thead>
        <tr>
            <th>
                Package
            </th>
            <th>
                Docs
            </th>
            <th>
                Changelog
            </th>
            <th>
                Build Status
            </th>
            <th>
                Master
            </th>
            <th>
                Develop
            </th>
            <th>
                Dependencies
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($repos as $repo) : ?>
            <?php if (0 === strpos($repo['name'], 'zend-') || in_array($repo['name'],
                    ['ZendSkeletonApplication', 'ZendDeveloperTools'])
            ) : ?>
                <tr>
                    <td>
                        <a href="https://github.com/<?php echo $this->escape($repo['full_name']); ?>"
                           title="View documentation">
                            <?php echo $this->escape($repo['name']); ?>
                        </a>
                    </td>
                    <td>
                        <?php if (!in_array($repo['name'], ['ZendSkeletonApplication', 'ZendDeveloperTools'])) : ?>
                            <a href="https://zendframework.github.io/<?php echo $this->escape($repo['name']); ?>"
                               title="View documentation">
                                docs
                            </a>
                        <?php endif; ?>
                    </td>
                    <td>
                        <?php if (!in_array($repo['name'], ['ZendSkeletonApplication', 'ZendDeveloperTools'])) : ?>
                            <a href="https://github.com/<?php echo $this->escape($repo['full_name']); ?>/blob/master/CHANGELOG.md"
                               title="View changelog">
                                changelog
                            </a>
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="https://secure.travis-ci.org/<?php echo $this->escape($repo['full_name']); ?>"
                           title="Travis">
                            <img
                                src="https://secure.travis-ci.org/<?php echo $this->escape($repo['full_name']); ?>.svg?branch=master">
                        </a>
                    </td>
                    <td>
                        <a href="https://github.com/<?php echo $this->escape($repo['full_name']); ?>"
                           title="View master source code">
                            <img
                                src="https://poser.pugx.org/<?php echo strtolower($dashedString($this->escape($repo['full_name']))); ?>/v/stable">
                        </a>
                    </td>
                    <td>
                        <a href="https://github.com/<?php echo $this->escape($repo['full_name']); ?>/tree/develop"
                           title="View develop source code">
                            <img
                                src="https://poser.pugx.org/<?php echo $dashedString($this->escape($repo['full_name'])); ?>/v/unstable">
                        </a>
                    </td>
                    <td>
                        <a href="https://www.versioneye.com/php/zendframework:<?php echo $this->escape($repo['name']); ?>/1.0.0"
                           title="View develop source code">
                            <img src="https://www.versioneye.com/php/zendframework:<?php echo $this->escape($repo['name']); ?>/badge.svg">
                        </a>
                    </td>
                </tr>
            <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
</table>
