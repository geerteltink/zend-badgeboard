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
                Travis
            </th>
            <th>
                Master
            </th>
            <th>
                Develop
            </th>
            <th>
                License
            </th>
            <th>
                Downloads
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($repos as $repo) : ?>
            <?php if (0 === strpos($repo['name'], 'zend-')) : ?>
            <tr>
                <td>
                    <?php echo $this->escape($repo['name']); ?>
                </td>
                <td>
                    <a href="https://zendframework.github.io/<?php echo $this->escape($repo['name']); ?>" title="View documentation">
                        docs
                    </a>
                </td>
                <td>
                    <a href="https://zendframework.github.io/<?php echo $this->escape($repo['name']); ?>/blob/master/CHANGELOG.md" title="View changelog">
                        changelog
                    </a>
                </td>
                <td>
                    <a href="https://secure.travis-ci.org/<?php echo $this->escape($repo['full_name']); ?>" title="Travis">
                        <img src="https://secure.travis-ci.org/<?php echo $this->escape($repo['full_name']); ?>.svg?branch=master">
                    </a>
                </td>
                <td>
                    <a href="https://github.com/<?php echo $this->escape($repo['full_name']); ?>" title="View master source code">
                        <img src="https://poser.pugx.org/<?php echo $this->escape($repo['full_name']); ?>/v/stable">
                    </a>
                </td>
                <td>
                    <a href="https://github.com/<?php echo $this->escape($repo['full_name']); ?>/tree/develop" title="View develop source code">
                        <img src="https://poser.pugx.org/<?php echo $this->escape($repo['full_name']); ?>/v/unstable">
                    </a>
                </td>
                <td>
                    <a href="https://github.com/<?php echo $this->escape($repo['full_name']); ?>/blob/master/LICENSE.md" title="View license">
                        <img src="https://poser.pugx.org/<?php echo $this->escape($repo['full_name']); ?>/license">
                    </a>
                </td>
                <td>
                    <a href="https://github.com/<?php echo $this->escape($repo['full_name']); ?>/releases" title="Releases">
                        <img src="https://poser.pugx.org/<?php echo $this->escape($repo['full_name']); ?>/downloads">
                    </a>
                </td>
            </tr>
                <?php endif; ?>
        <?php endforeach; ?>
    </tbody>
</table>
