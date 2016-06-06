<?php $this->layout('layout', ['title' => 'User Profile']); ?>

<h1>ZendFramework Components</h1>

<table>
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
            <tr>
                <td>
                    <a href="https://zendframework.github.io/<?php echo $this->e($repo['name']); ?>">
                        <?php echo $this->e($repo['name']); ?>
                    </a>
                </td>
                <td>
                    <a href="https://zendframework.github.io/<?php echo $this->e($repo['name']); ?>">docs</a>
                </td>
                <td>
                    <a href="https://zendframework.github.io/<?php echo $this->e($repo['name']); ?>/blob/master/CHANGELOG.md">changelog</a>
                </td>
                <td>
                    <a href="https://secure.travis-ci.org/<?php echo $this->e($repo['full_name']); ?>">
                        <img src="https://secure.travis-ci.org/<?php echo $this->e($repo['full_name']); ?>.svg?branch=master">
                    </a>
                </td>
                <td>
                    <a href="https://github.com/<?php echo $this->e($repo['full_name']); ?>">
                        <img src="https://poser.pugx.org/<?php echo $this->e($repo['full_name']); ?>/v/stable">
                    </a>
                </td>
                <td>
                    <a href="https://github.com/<?php echo $this->e($repo['full_name']); ?>/tree/develop">
                        <img src="https://poser.pugx.org/<?php echo $this->e($repo['full_name']); ?>/v/unstable">
                    </a>
                </td>
                <td>
                    <a href="https://github.com/<?php echo $this->e($repo['full_name']); ?>/blob/master/LICENSE.md">
                        <img src="https://poser.pugx.org/<?php echo $this->e($repo['full_name']); ?>/license">
                    </a>
                </td>
                <td>
                    <a href="https://github.com/<?php echo $this->e($repo['full_name']); ?>/releases">
                        <img src="https://poser.pugx.org/<?php echo $this->e($repo['full_name']); ?>/downloads">
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
