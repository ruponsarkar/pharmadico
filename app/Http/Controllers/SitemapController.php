<?php

namespace App\Http\Controllers;

use App\Models\articles;
use App\Models\issue;
use App\Models\journal;
use App\Models\volumes;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $staticUrls = collect([
            ['loc' => url('/'), 'changefreq' => 'daily', 'priority' => '1.0'],
            ['loc' => url('journals'), 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => url('manuscript'), 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => url('authorGuidlines'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('editorsGuidlines'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('reviewersGuidlines'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('PublicationEthics'), 'changefreq' => 'monthly', 'priority' => '0.6'],
            ['loc' => url('PublicationEthicsandMalpracticeStatement'), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => url('ManuscriptPreparationGuidelines'), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => url('MissionStatement'), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => url('EthicalIssue'), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => url('EditorialPolicy'), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => url('conference'), 'changefreq' => 'weekly', 'priority' => '0.7'],
            ['loc' => url('contactUs'), 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => url('Join_editor'), 'changefreq' => 'monthly', 'priority' => '0.4'],
            ['loc' => url('join_reviewer'), 'changefreq' => 'monthly', 'priority' => '0.4'],
            ['loc' => url('about'), 'changefreq' => 'monthly', 'priority' => '0.5'],
        ]);

        $journalUrls = journal::query()
            ->where('active', 1)
            ->pluck('j_id')
            ->map(fn ($journalId) => [
                'loc' => url('journal-details/' . $journalId),
                'changefreq' => 'weekly',
                'priority' => '0.8',
            ]);

        $volumeUrls = volumes::query()
            ->pluck('id')
            ->map(fn ($volumeId) => [
                'loc' => url('all_issues/' . $volumeId),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ]);

        $issueUrls = issue::query()
            ->where('active', 1)
            ->pluck('id')
            ->map(fn ($issueId) => [
                'loc' => url('issues/' . $issueId),
                'changefreq' => 'weekly',
                'priority' => '0.7',
            ]);

        $articleUrls = articles::query()
            ->where('status', 1)
            ->whereNotNull('slug')
            ->pluck('slug')
            ->filter()
            ->map(fn ($slug) => [
                'loc' => url('article/' . $slug),
                'changefreq' => 'monthly',
                'priority' => '0.8',
            ]);

        $urls = $staticUrls
            ->merge($journalUrls)
            ->merge($volumeUrls)
            ->merge($issueUrls)
            ->merge($articleUrls)
            ->unique('loc')
            ->values();

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
