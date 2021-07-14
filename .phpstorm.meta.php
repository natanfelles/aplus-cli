<?php
/*
 * This file is part of Aplus Framework CLI Library.
 *
 * (c) Natan Felles <natanfelles@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPSTORM_META;

registerArgumentsSet(
    'cli_foreground_colors',
    \Framework\CLI\CLI::FG_BLUE,
    \Framework\CLI\CLI::FG_BRIGHT_BLACK,
    \Framework\CLI\CLI::FG_BRIGHT_BLUE,
    \Framework\CLI\CLI::FG_BRIGHT_CYAN,
    \Framework\CLI\CLI::FG_BRIGHT_GREEN,
    \Framework\CLI\CLI::FG_BRIGHT_MAGENTA,
    \Framework\CLI\CLI::FG_BRIGHT_RED,
    \Framework\CLI\CLI::FG_BRIGHT_WHITE,
    \Framework\CLI\CLI::FG_BRIGHT_YELLOW,
    \Framework\CLI\CLI::FG_CYAN,
    \Framework\CLI\CLI::FG_GREEN,
    \Framework\CLI\CLI::FG_MAGENTA,
    \Framework\CLI\CLI::FG_RED,
    \Framework\CLI\CLI::FG_WHITE,
    \Framework\CLI\CLI::FG_YELLOW,
);
registerArgumentsSet(
    'cli_background_colors',
    \Framework\CLI\CLI::BG_BLACK,
    \Framework\CLI\CLI::BG_BLUE,
    \Framework\CLI\CLI::BG_BRIGHT_BLACK,
    \Framework\CLI\CLI::BG_BRIGHT_BLUE,
    \Framework\CLI\CLI::BG_BRIGHT_CYAN,
    \Framework\CLI\CLI::BG_BRIGHT_GREEN,
    \Framework\CLI\CLI::BG_BRIGHT_MAGENTA,
    \Framework\CLI\CLI::BG_BRIGHT_RED,
    \Framework\CLI\CLI::BG_BRIGHT_YELLOW,
    \Framework\CLI\CLI::BG_CYAN,
    \Framework\CLI\CLI::BG_GREEN,
    \Framework\CLI\CLI::BG_MAGENTA,
    \Framework\CLI\CLI::BG_RED,
    \Framework\CLI\CLI::BG_WHITE,
    \Framework\CLI\CLI::BG_YELLOW,
);
registerArgumentsSet(
    'cli_formats',
    \Framework\CLI\CLI::FM_BOLD,
    \Framework\CLI\CLI::FM_CONCEAL,
    \Framework\CLI\CLI::FM_CROSSED_OUT,
    \Framework\CLI\CLI::FM_DOUBLY_UNDERLINE,
    \Framework\CLI\CLI::FM_ENCIRCLED,
    \Framework\CLI\CLI::FM_FAINT,
    \Framework\CLI\CLI::FM_FRAKTUR,
    \Framework\CLI\CLI::FM_ITALIC,
    \Framework\CLI\CLI::FM_PRIMARY_FONT,
    \Framework\CLI\CLI::FM_RAPID_BLINK,
    \Framework\CLI\CLI::FM_REVERSE_VIDEO,
    \Framework\CLI\CLI::FM_SLOW_BLINK,
    \Framework\CLI\CLI::FM_UNDERLINE,
);
expectedArguments(
    \Framework\CLI\CLI::write(),
    1,
    argumentsSet('cli_foreground_colors')
);
expectedArguments(
    \Framework\CLI\CLI::write(),
    2,
    argumentsSet('cli_background_colors')
);
expectedArguments(
    \Framework\CLI\CLI::style(),
    1,
    argumentsSet('cli_foreground_colors')
);
expectedArguments(
    \Framework\CLI\CLI::style(),
    2,
    argumentsSet('cli_background_colors')
);
/*expectedArguments(
    \Framework\CLI\CLI::style(),
    3,
    argumentsSet('cli_formats')
);*/
